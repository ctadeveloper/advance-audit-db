<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    {{files}}
                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    data(){
        return{
            files:{}
        }
    },
    methods:{
        load(){
            axios.get('/api/file')
            .then(response => {
                this.files = response.data;
                console.log(this.files);
            })
        }
    },
    mounted(){
        this.load();
        console.log(this.files);

    }
    }
</script>
