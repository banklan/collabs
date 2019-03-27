<template>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="project_show">
                    <div class="project_head">
                        <div class="mini_menu">
                            <a href="">Share</a>
                            <a href="">Edit</a>
                            <a href="">Withdraw</a>
                            <a href="">Delete</a>
                            <a href="">Update</a>
                        </div>
                        <div class="project_title">
                            <h3>Title of project here</h3>
                        </div>
                    </div>
                    <div class="proj_content">

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .project_show{
        width: 100%;
    }
    .project_head{
        width: 100%;
        height: 15rem;
        display: flex;
        flex-direction: column;
        /* justify-content: space-around;
        align-items: space-around; */
        flex-wrap: wrap;
    }
    .mini_menu{
        flex-basis: 100%;
        height: 50%;
        display: flex;
        justify-content: space-around;
        align-items: center;

    }
</style>
