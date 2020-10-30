<template>
    <div>
        <h3>Edit contact here</h3>
        <form @submit.prevent="editContact()" class="form-edit-contact" name="myform">
            <input type="hidden" name="contactid" v-model="actionContact.id">

            <div class="col-md-4" style="margin: 20px;">
                <label>Name</label>
                <input type="text" class="form-control" name="full_name" v-model="actionContact.full_name">
            </div>

            <div class="col-md-4" style="margin: 20px;">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" v-model="actionContact.phone">
            </div>

            <div class="col-md-4" style="margin: 20px;">
                <label>Email</label>
                <input type="email" class="form-control" name="email" v-model="actionContact.email">
            </div>

            <div class="col-md-4" style="margin: 20px;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</template>

<script>
import allcontacts from "../allcontacts";

export default {
    name: "Edit",
    props:{
        contact:{
            required:true
        },
    },
    data(){
        return{
            contacts:[],
            actionContact:{},
        }
    },

    mounted() {
        console.log(this.contact)
        this.actionContact = this.contact
    },

    methods:{
        goBack(){
            this.$router.back();
        },

        editContact(){
            let postData = new FormData($(".form-edit-contact")[0]);
            axios
                .post('editcontact', postData)
                .then(repsonse => (
                    alert("Contact Successfully edited"),
                        this.goBack()
                ))
                .catch(error => console.log(error))
                .finally(() => this.loading = false)
        },
    }

}
</script>

<style scoped>

</style>
