new Vue({
    el: 'body',
    data: {
        articles: [],
        loading: false,
        error: false,
        query: ''
    },
    methods: {
        search: function() {
            this.error = '';
            this.articles = [];
            this.loading = true;
            this.$http.get('/api/search?q=' + this.query).then((response) => {
                response.body.error ? this.error = response.body.error : this.articles = response.body;
                this.loading = false;
                this.query = '';
            });
        }
    }
});
