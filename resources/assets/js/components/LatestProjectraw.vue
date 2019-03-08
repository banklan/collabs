<template>
    <div class="latest_project">
        <div class="proj_wrap">
            <img src="/images/proj-thumb/lily.jpg" class="lily_thumb">
            <div class="proj_text">
                <h4 class="title">{{ project.title}}</h4>
                <p>{{ project.body | truncate(200) }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['project'],
        data(){
            return {

            }
        },
        filters: {
            truncate(string, value){
                if(string.length > value){
                   return string.substring(0, value) + " ..."; 
               }else{
                    return string;
               }
            }
        },
        methods: {
            
        },
        created() {
            
        },
        
    }
</script>


<style scoped>
   .latest_project{
        padding: 20px;
        line-height: 1.5;
        
         margin: 20px auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        line-height: 1.8;
    }
    .latest_project .proj_wrap{
        flex: 0 1 49%;
        max-height: 300rem;
        padding: 1.5rem;
        border: 1px solid #ddd;
        margin-bottom: 2.4rem;
        border-radius: .4rem;

        display: flex;
        align-items: center;
        justify-content: space-around;
    }
    .proj_wrap img{
        height: 80px;
        width: 80px;
        border-radius: 4px;
        flex: 1;
        order: 0;
        margin-right: 1.5rem;
    }
    .proj_wrap .proj_text{
        flex: 5;
        order: 1;
        align-self: center;
    }

</style>

