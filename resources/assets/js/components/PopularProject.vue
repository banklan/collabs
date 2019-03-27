<template>
    <div class="popular_project">
        <a href="#" class="proj_wrap">
            <img :src="'/images/proj-thumb/' + project.file" class="lily_thumb">
            <div class="proj_text">
                <h4 class="title">{{ project.title | truncate(50) }}</h4>
                <p class="author text-muted">{{ project.user.fullname }} | {{ project.published_ago }}</p>
                <p class="body">{{ project.body | truncate(100) }}</p>
            </div>
            <div class="proj_footer">
                <achievement-bar :ach ="achieved"></achievement-bar>
                <p class="target">Goal: &#8358;{{ project.formatted_goal }}</p>
                <small>Achieved: &#8358; {{ project.formatted_raised }} </small>
                <p class="muted">{{ project.days_to_go }} more days to go </p>
            </div>
        </a>
    </div>
</template>

<script>
export default {
    props: ['project'],
    data(){
        return{
            achieved: null
        }
    },
    mounted(){
        console.log(this.project.raised)

        if(this.project.raised == 0){
            this.achieved = 0;
        }else{
            let raised = parseInt(this.project.raised) 
            let goal = parseInt(this.project.campaign_goal) 
            let achieved = raised/goal * 100;

            if(achieved > 100){
                this.achieved = 100;
            }else{
                this.achieved = (Math.round(achieved * 10)/10)
            }
        }
    }
}
</script>

<style scoped>
   .popular_project{
        line-height: 1.5;
        margin-bottom: 1rem;
        box-sizing: border-box;
        transition: all .6s cubic-bezier(.52,-0.59,.8,1.84);
        height: 48rem;
        border: 1px solid #e4e4e4;
        box-shadow: 0rem 0rem 1rem .2rem rgba(118,118,118,.2);
        border-radius: 4px;
        overflow: hidden;
        transition: all .4s ease;
        /* transform-origin: 0 100%; */
        /* backface-visibility: hidden; */
        /* transform: perspective(1px);
        -webkit-font-smoothing: subpixel-antialiased;
        -webkit-backface-visibility: hidden; */
    }
    .popular_project:hover{
        transform: scale(1.0414);
        border: 1px solid #c7c7c7;
        box-shadow: 0rem 0rem 1.5rem .5rem rgba(87, 86, 86, 0.4);
    }
    .proj_wrap{
        color: #4d4d4d;

        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .proj_wrap:hover{
        text-decoration: none;
    }
    .proj_wrap img{
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        background-size: cover;
        height: 18rem;
        /* flex:0 0 100%; */
    }
    .proj_wrap .proj_text{
        padding: 1.2rem 2rem;
        line-height: 1.5;
        /* font-size: 14px; */
    }
    .proj_text h4{
        font-size: 1.7rem;
    }
    .proj_text p{
        font-size: 1.4rem;
    }
    .proj_text .author{
        font-size: 1.25rem;
    }
    .proj_wrap .proj_footer{
        padding: 1.5rem 2rem;
        align-self: flex-start;
    }
    .target{
        color: var(--coll);
    }

    @media screen and (max-width: 1122px){
        .popular_project{
            margin-bottom: 2rem;
        }
    }
   
</style>

