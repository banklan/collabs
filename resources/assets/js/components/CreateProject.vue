<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 create">
                <h2 class="text-center">What kind of campaign are you starting?</h2>
                <div class="campaign_btns">
                    <router-link :to="{name: 'CreateFundraising'}" class="fundraising">Fundraising</router-link>
                    <router-link :to="{name: 'CreateVolunteer'}" class="volunteer">Volunteer</router-link>
                    <router-link :to="{name: 'CreatePatron'}" class="patron">Patron</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .create{
        color: #4d4d4d;
        margin-top: 5rem;
        padding: 5rem;
    }
    .create h2{
        padding-bottom: 5rem; 
    }
    .campaign_btns{
        /* padding: 5rem; */
        display: flex;
        justify-content: space-around;
        align-items: center;
        /* flex-direction: column; */
    }
    .campaign_btns a{
        padding: .8rem 1.8rem;
        width: 14rem;
        text-align: center;
        border-radius: 4px;
        background-color: transparent;
        border: 1px solid var(--col-pry-red);
        color: var(--col-pry-red);
        transition: all .4s;
    }
    .campaign_btns a:hover{
        text-decoration: none;
        background-color: var(--col-pry-red);
        border: 1px solid var(--col-pry-red);
        color: #fff;
        box-shadow: 0rem 0rem 2rem 3px rgba(243, 55, 25, 0.4);
    }
    .campaign_btns a:active{
        transform: translateY(3px);
        box-shadow: 0rem 0rem 2rem 10px rgba(243, 55, 25, 0.4);
    }
    .campaign_btns a:visited{
        text-decoration: none;
    }
</style>

