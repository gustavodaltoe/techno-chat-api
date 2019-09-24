<template>
    <ul class="chat">
        <li class="left clearfix" v-for="mensagem in mensagens">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ mensagem.participante.user.name }}
                    </strong>
                </div>
                <p>
                    {{ mensagem.conteudo }}
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
  export default {
    props: ['mensagens']
  };
</script>