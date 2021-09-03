<template>
    <div class="container">
       <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" ref="cancel_edit_btn" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 <div class="modal-body">
        <h1> hhhh </h1>
        <button @click="close()" >  cls   </button>
      </div>

      <div class="modal-footer">
        
      </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
        ,
        methods:{
            close(){
                this.$refs.cancel_edit_btn.click();
                
            }
        }
    }
</script>
