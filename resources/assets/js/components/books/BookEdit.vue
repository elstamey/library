<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Edit book</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Book title</label>
                            <input type="text" v-model="book.title" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Book author</label>
                            <input type="text" v-model="book.author" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Book cover</label>
                            <input type="text" v-model="book.picture" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Book isbn</label>
                            <input type="text" v-model="book.isbn" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Book description</label>
                            <input type="text" v-model="book.description" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.bookId = id;
            axios.get('/api/v1/books/' + id)
                .then(function (resp) {
                    app.book = resp.data;
                })
                .catch(function () {
                    alert("Could not load your book")
                });
        },
        data: function () {
            return {
                bookId: null,
                book: {
                    name: '',
                    author: '',
                    picture: '',
                    isbn: '',
                    description: '',
                }
            }
        },
        methods: {
            saveForm() {
                event.preventDefault();
                var app = this;
                var newBook = app.book;
                axios.patch('/api/v1/books/' + app.bookId, newBook)
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not update your book");
                    });
            }
        }
    }
</script>

<style scoped>

</style>    