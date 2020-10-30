<template>

    <div>
        <h3>Create a new contact here</h3>
        <form @submit.prevent="addContact()" class="form-new-contact" name="myform">
            <div class="col-md-6" style="margin: 20px;">
                <label for="exampleInputName">Enter full name</label>
                <input type="text" class="form-control" name="fullname" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Full Names">
            </div>

            <div class="col-md-6" style="margin: 20px;">
                <label for="exampleInputPhone">Phone</label>
                <input type="text" class="form-control" name="phone" id="exampleInputPhone" placeholder="Enter phone number">
            </div>

            <div class="col-md-6" style="margin: 20px;">
                <label for="exampleInputEmail">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="Enter your email">
            </div>

            <div class="col-md-6" style="margin: 20px;">
                <button style="margin-top:30px; margin-bottom:30px;" type="submit" class="btn btn-primary">Submit</button>
            </div>


        </form>
    </div>

</template>

<script>
export default {
    name: "List",
    methods:{
        goBack(){
            this.$router.back();
        },

        addContact(){
            let postData = new FormData($(".form-new-contact")[0]);
            axios
            .post('addcontacts', postData)
            .then(repsonse => (
                alert("Successfully created new contact"),
                this.goBack()
            ))
                .catch(error => console.log(error))
                .finally(() => this.loading = false)
        },

        showModal(){
            this.actionContact = JSON.parse(JSON.stringify(contact));
            $("#exampleModal").modal('show');
        }

    }


}
</script>

<style scoped>

</style>
