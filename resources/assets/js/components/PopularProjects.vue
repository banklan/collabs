<template>
    <div class="popular_projects">
        <h2 class="text-center home_subhead">Popular Projects</h2>
        <div class="popular_project_listings">
            <div v-for="project in projects" :key="project.id" class="pop_proj">
                <popular-project :project="project"></popular-project>
            </div>
        </div>
        <div class="fav_projects">
            <a href="" class="all_favs">See the projects we love</a>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                projects: []
            }
        },
        created() {
            axios.get('/getpopularprojects').then((res) => {
                this.projects = res.data
                // console.log(res.data)
            })
        },
    }

</script>

<style scoped>
    .popular_projects{
        padding: 1.5rem 3rem;
        color: #3c3c3c;
        box-sizing: border-box;
        margin-bottom: 1.5rem;
        overflow: hidden;
        /* height: 60rem; */
    }
    .popular_project_listings{
        height: 100%;
        padding: 1rem 10rem;
        display:flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
    }
    .pop_proj{
        flex: 0 1 30%;
    }
    .fav_projects{
        margin-top: 2rem;
        margin-bottom: 2rem;
        text-align: center;
    }
    .all_favs{
        padding: 1.2rem 4rem;
        font-size: 1.6rem;
        color: var(--col-pry-red); 
        border: 1px solid var(--col-pry-red);
        border-radius: 4px;
        transition: all .4s;
    }
    a.all_favs:hover,
    a.all_favs:active{
        text-decoration: none;
        color: #f7f7f7;
        font-weight: 500;
        background: var(--col-pry-red);
        border: 1px solid var(--col-pry-red);
        box-shadow: .1rem .5rem 2rem  rgba(0, 0, 0, 0.4);
    }
    
    
</style>
