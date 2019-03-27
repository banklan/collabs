<template>
    <div class="happy_endings">
        <h2 class="text-center home_subhead">We have some happy endings to share</h2>
        <div class="happy_ending_listing">
            <div v-for="project in projects" class="single_happy" :key="project.id">
                 <happy-ending :project="project"></happy-ending>
            </div>
        </div>
        <div class="all_happy_endings">
            <a href="" class="all_ends">See all happy endings</a>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return {
                projects: []
            }
        },
        created() {
            axios.get('/gethappyendings').then((res) => {
                this.projects = res.data
                // console.log(res.data)
            })
        },
    }

</script>

<style scoped>
    .happy_endings{
        padding: 3rem 5rem;
        /* height: 100vh; */
        width: 100%;
        color: #3c3c3c;
        box-sizing: border-box;
        overflow: hidden;
        /* margin-top: -1rem; */
        /* margin-bottom: 2rem; */
    }
    .happy_ending_listing{
        height: 80%;
        display:flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center; 
    }
    .single_happy{
        flex: 0 1 70%;
        padding: 2rem;
    }
    .all_happy_endings{
        margin-top: 2rem;
        margin-bottom: 2rem;
        text-align: center;
    }
    .all_ends{
        padding: 1.2rem 4rem;
        font-size: 1.6rem;
        color: var(--col-pry-red); 
        border: 1px solid var(--col-pry-red);
        border-radius: 4px;
        transition: all .4s;
    }
    a.all_ends:hover,
    a.all_ends:active{
        text-decoration: none;
        color: #f7f7f7;
        font-weight: 500;
        background: var(--col-pry-red);
        border: 1px solid var(--col-pry-red);
        box-shadow: .1rem .5rem 2rem  rgba(0, 0, 0, 0.4);
    }

    
    @media screen and (max-width: 1200px){
        .single_happy{
            flex: 0 1 80%;
        }
    }
     @media screen and (max-width: 1099px){
        .single_happy{
            flex: 0 1 85%;
        }
    }
    @media screen and (max-width: 1011px){
        .single_happy{
            flex: 0 1 88%;
        }
    }
    @media screen and (max-width: 846px){
         .single_happy{
             flex: 0 1 90%;
         }
    }
    @media screen and (max-width: 748px){
         .single_happy{
             flex: 0 1 94%;
         }
    }
    @media screen and (max-width: 721px){
         .single_happy{
             flex: 0 1 96%;
         }
    }
    @media screen and (max-width: 622px){
         .single_happy{
             flex: 0 1 98%;
             padding: 2rem;
         }
    }
    .single_happy:not(:last-child){
        margin-bottom: 1.5rem;
    }
</style>
