<template>
    <div class="latest_projects">
        <h2 class="text-center home_subhead">Latest Projects</h2>
        <div class="latest_project_listings">
            <div v-for="project in projects" :key="project.id" class="single_wrap">
                <latest-project :project="project"></latest-project>
            </div>
        </div>
        <div class="see_more">
          <a href="">See  projects</a>  
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
                // console.log(res.data)
            })
        },
    }

</script>

<style scoped>
    .latest_projects{
        padding: 2rem 8rem;
        margin-top: 1rem;
        background-color: #fff;
        /* height: 100vh;
        width: 100%; */
        color: #3c3c3c;
        box-sizing: border-box;
        overflow: hidden;

        display: flex;
        flex-direction: column;
    }
    .latest_project_listings{
       height: 90%;
       display: flex;
       flex-wrap: wrap;
       justify-content: space-around;
       align-items: center;
    }
    .single_wrap{
       flex: 0 0 48%;
    }
    .see_more{
        text-align: center;
        font-size: 1.6rem;
        padding-top: 2rem;
        padding-bottom: 1rem;
    }
    .see_more a{
        border: 1px solid rgb(236, 59, 55);
        color: #4c4c4c;
        border-radius: 4px;
        margin-top: 1.5rem;
        font-weight: 400;
        background: transparent;
        padding: 8px 42px;
        transition: all .4s;
    }
    .see_more a:hover{
        text-decoration: none;
        background-color: rgb(236, 59, 55);
        color: #fff;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
    }
    @media only screen and (max-width: 912px){
        .single_wrap{
            flex: 0 1 95%;
        }
    }
     @media screen and (max-width: 619px){
         .single_wrap{
            flex: 0 1 98%;
        }
     }
</style>
