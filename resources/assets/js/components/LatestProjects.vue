<template>
    <div class="latest_projects">
        <h2 class="text-center">Latest Projects</h2>
        <div class="latest_project_listings">
            <div v-for="project in projects" :key="project.id" class="single_wrap">
                <latest-project :project="project"></latest-project>
            </div>
        </div>
        <div class="see_more">
          <a href="">See all</a>  
        </div>
        
    </div>
</template>


<script>
    export default{
        data() {
            return {
                projects: []
            }
        },
        created() {
            axios.get('/getlatestprojects').then((res) => {
                this.projects = res.data
                console.log(res.data)
            })
        },
    }

</script>

<style scoped>
    .latest_projects{
        padding: 3rem 5rem;
        background-color: #fff;
        height: 100vh;
        width: 100%;
        color: #3c3c3c;
        box-sizing: border-box;

        display: flex;
        flex-direction: column;
    }
    .latest_projects h2{
        padding-bottom: 2rem;
        align-self: center;
    }
    .latest_project_listings{
       height: 90%;
       display: flex;
       flex-wrap: wrap;
       justify-content: space-around;
       align-items: center;
    }
    .single_wrap{
       flex: 0 1 49%;
    }
    @media only screen and (max-width: 1200px){
        .single_wrap{
            flex: 0 1 95%;
        }
    }
    .latest_projects .see_more{
        align-self: flex-end;
    }
    
</style>
