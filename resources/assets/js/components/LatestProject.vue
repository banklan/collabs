<template>
    <div class="latest_project">
        <router-link :to="{path: '/fundraising_project/'+ project.id + '/' + project.slug, params:{proj: project}}" class="proj_wrap">
            <img :src="'/images/proj-thumb/' + project.file" class="lily_thumb">
            <div class="proj_text">
                <h4 class="title">{{ project.title | truncate(50) }}</h4>
                <p class="author text-muted">{{ project.user.fullname }} | {{ project.published_ago }}</p>
                <p class="body">{{ project.body | truncate(130) }}</p>
                <small>{{ project.expiry_date }}</small>
            </div>
        </router-link>
    </div>
</template>

<script>
    export default {
        props: ['project'],
    }
</script>


<style scoped>
    .latest_project{
        line-height: 1.5;
        padding: 1.5rem;
        margin-bottom: 1rem;
        box-sizing: border-box;
        /* width: 100%; */
    }
    .proj_wrap{
        color: #4d4d4d;;
        height: 24rem;
        padding: 1.5rem;
        border: 1px solid #dedede;
        box-shadow: .3rem .3rem .5rem rgba(0,0,0,.2);
        border-radius: 6px;
        /* width:100%; */

        display: flex;
        justify-content: space-between;
        align-items: center;
        /* flex-wrap: wrap; */
        transition: all .4s;
    }
    a.proj_wrap:hover{
        text-decoration: none;
        box-shadow: .8rem .8rem 1rem rgba(0,0,0,.5);
        transform: translateY(-3px);
    }
   .proj_wrap img{
       /* flex: 0 0 35%; */
       flex-basis: 35%;
       height: 14rem;
       border-radius: 4px;
       margin-right: 1.5rem;
   }
   .proj_text{
       flex: 0 1 65%;
   }
   .proj_text h4{
       font-size: 1.8rem;
       font-weight: 400;
       line-height: 1.5;
   }
   .proj_text .body{
       font-size: 1.4rem;
   }
   .proj_text .author,
   .proj_text .published{
       font-size: 1.3rem;
       line-height: 1.0;
   }

   
    @media screen and (max-width: 1229px) {
        .proj_wrap img{
           width: 30%;
        }
    }
    @media screen and (max-width: 1160px) {
       .proj_wrap img{
           height: 13rem;
       }
       .proj_text h4{
           font-size: 1.6rem;
           font-weight: 300;
       }
       .proj_text .body{
            font-size: 1.3rem;
        }
        .proj_text .author,
        .proj_text .published{
            font-size: 1.2rem;
        }
   }
   @media screen and (max-width: 1070px){
        .proj_wrap img{
           flex-basis: 30%;
        }
   }
   @media screen and (max-width: 998px){
       .latest_project{
           padding:  0.8rem;
       }
       .proj_wrap img{
           flex-basis: 28%;
           height: 13rem;
       }
   }

   @media only screen and (max-width: 985px){
        .latest_project{
           padding:  0.5rem;
       }
       .proj_wrap img{
           height: 10rem;
       }
       .proj_text h4{
           font-size: 1.5rem;
           font-weight: 300;
       }
       .proj_text .body{
            font-size: 1.3rem;
        }
        .proj_text .author,
        .proj_text .published{
            font-size: 1.2rem;
        }
   }
   @media screen and (max-width: 912px){
       .proj_wrap{
           height: 20rem;
       }
       .proj_wrap img{
           height: 14rem;
       }
       .proj_text h4{
           font-size: 1.8rem;
       }
       .proj_text .body{
            font-size: 1.4rem;
        }
        .proj_text .author,
        .proj_text .published{
            font-size: 1.3rem;
        }
   }
    @media screen and (max-width: 619px){
        .proj_wrap img{
           height: 13rem;
       }
       .proj_text h4{
           font-size: 1.6rem;
       }
       .proj_text .author,
        .proj_text .published{
            font-size: 1.2rem;
        }
    }
   @media screen and (max-width: 508px){
       a.proj_wrap{
           display: flex;
           flex-direction: column;
           max-height: 30rem;
       }
   }
</style>

