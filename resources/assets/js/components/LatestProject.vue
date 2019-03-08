<template>
    <div class="latest_project">
        <a href="#" class="proj_wrap">
            <img src="/images/proj-thumb/lily.jpg" class="lily_thumb">
            <div class="proj_text">
                <h4 class="title">{{ project.title | truncate(40) }}</h4>
                <p class="author text-muted">Author: Dr. Jean Tigana | 1 month ago</p>
                <p class="body">{{ project.body | truncate(180) }}</p>
            </div>
        </a>
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
        line-height: 1.5;
        padding: 1.5rem;
        margin-bottom: 10px;
    }
    a.proj_wrap{
        color: #3c3c3c;
        max-height: 20rem;
        padding: 3rem;
        border: 1px solid #e8e8e8;
        border-radius: 6px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    a.proj_wrap:hover{
        text-decoration: none;
    }
   .proj_wrap img{
       flex: 0 1 30%;
       height: 12rem;
       border-radius: 4px;
       margin-right: 1.5rem;
   }
   .proj_text h4{
       font-size: 1.9rem;
       font-weight: 400;
       line-height: 1.5;
   }
   .proj_text .body{
       font-size: 1.5rem;
   }
   .proj_text .author,
   .proj_text .published{
       font-size: 13px;
       line-height: 1.0;
   }
   @media only screen and (max-width: 1310px){
       a.proj_wrap{
            padding: 3.5rem;
       }
       .proj_wrap img{
            flex: 0 1 26%;
            height: 10rem;
            margin-right: 1.3rem;
        }
        .proj_text h4{
            font-size: 1.7rem;
            font-weight: 500;
        }
   }

   @media only screen and (max-width: 1200px){
         a.proj_wrap{
             padding: 2rem;
         }
   }

   @media only screen and (max-width: 698px){
        a.proj_wrap{
            display: flex;
            flex-direction: column;
            max-height: 30rem;
        }
        .proj_text h4{
            text-align: center;
            font-weight: 500;
        }
   }

    @media only screen and (max-width: 541px){
        a.proj_wrap{
            max-height: 34rem;
            padding:3rem;
        }
    }

    @media only screen and (max-width: 510px){
         a.proj_wrap{
            max-height: 34rem;
            padding: 4rem;
         }
         .proj_wrap img{
            height: 7.5rem;
        }
    }

    @media only screen and (max-width: 480px){
        a.proj_wrap{
            max-height: 38rem;
            padding: 4.1rem;
         }
    }

    @media only screen and (max-width: 440px){
         a.proj_wrap{
            max-height: 40rem;
            padding: 4.2rem;
         }
    }

</style>

