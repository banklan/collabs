<template>
    <div class="welcome_banner">
        <a href='/create_project' class="create_cta">Create A project</a>
        <div class="banner_txt">
            <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit necessitatibus!</h1>
            <a href="#" class="welcome_cta">Join us</a>
        </div>
    </div>
</template>


<style scoped>
    .welcome_banner{
        height: 100vh;
        min-height: 60rem;
        width: 100vw;
        margin-top: -10rem;
        background-image: linear-gradient(to bottom right, rgba(131, 118, 226, 0.568), rgba(236, 59, 55)), url(/images/girl.jpg);
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }
    /* fixed create project button */
    .welcome_banner .create_cta{
        position: fixed;
        top: 7rem;
        right: 8.5rem;
        color: var(--btn-text-black);
        z-index: 1000;
        border: 1px solid var(--btn-border-green);
        border-radius: 4px;
        background-color: var(--col-pry-green);
        padding: 1rem 2rem;
        cursor: pointer;
        transition: all .6s;
    }
    .welcome_banner .create_cta:hover{
        background-color: rgb(236, 59, 55);
        border: rgb(236, 59, 55);
        color: #f7f7f7;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
    }
    .welcome_banner .create_cta:active{
        transform: translateY(-1px);
        box-shadow: 0 0 1.5rem 1.5rem rgba(0, 0, 0, 0.2);
    }
    .banner_txt{
        text-align: center;
        width: 100%;
        height: 100%;
        
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: auto;
    }
    .banner_txt h1{
        line-height: 1.5;
        font-weight: 300;
        font-size: 4.8rem;
        margin-top: -7rem;
        color: #f7f7f7;
    }
    @media screen and (max-width: 768px){
        .banner_txt{
            padding: 2rem 3rem;
        }
        .banner_txt h1{
            font-size: 4.2rem;
        }
    }
    @media screen and (max-width: 576px){
        .banner_txt h1{
            font-size: 3.8rem;
        }
    }
    .banner_txt a{
        margin-top: 3.5rem;
        font-size: 2.2rem;
        font-weight: 300;
        color: var(--col-light-white);
        border: 1px solid var(--col-pry-green);
        padding: .8rem 5.5rem;
        border-radius: 3px;
        background: transparent;
        transition: all .4s;
    }
    .banner_txt a:link,
    .banner_txt a:visited{
        text-decoration: none;
    }
    .banner_txt a:hover{
        background-color: var(--col-pry-green);
        color: var(--btn-text-black);
        border: 1px solid var(--btn-border-green);
        text-decoration: none;
        transform: translateY(-3px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.4);
        /* font-weight: 400; */
    }
    .banner_txt a:active{
        transform: translateY(-1px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
    .banner_txt a::after{
        content: '';
        position: absolute;
        display: inline-block;
        height: 100%;
        width: 100%;
        border-radius: 3px;
        top: 0;
        right: 0;
        z-index: -1;
        transition: all .6s;
        background-color: transparent;
    }
    .banner_txt a:active::after{
        transform: scaleX(1.4) scaleY(1.8);
        opacity: .1;
        background-color: rgba(36, 36, 36, 0.412);
        text-decoration: none;
    }
    
</style>
