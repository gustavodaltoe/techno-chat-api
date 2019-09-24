<template>
    <div class="input-group">
        <input id="btn-input" type="text" name="mensagem" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">

        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', { 
                    user: this.user,
                    mensagem: this.newMessage
                });

                this.newMessage = ''
            }
        }    
    }
</script>