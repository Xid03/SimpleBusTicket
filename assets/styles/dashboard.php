<style>
    #div1 {
        background-color: #FFDFDF;
        height: 10px;
    }

    #div2 {
        height: 100px;
        background-color: #FFDFDF;
        box-shadow: 7px 7px 4px rgba(0, 1, 1, 0.03);
    }
    #div2 h2{
        margin-top: -20px;
        margin-left: 150px;
        font-family: 'Nunito', sans-serif;
    }

    #main-content h3 {
        padding-left: 1rem;
        margin-bottom: 0;
        text-transform: uppercase;
    }

    #status,
    #user,
    #admin {
        display: flex;
        flex-wrap: wrap;
    }

    .info-box {
        padding: 0.3rem 1rem;
        margin: 1rem;
        border-radius: 5px;
    }

    .heading {
        display: flex;
        justify-content: space-between;
    }

    .heading h5 {
        color: white;
        text-align: center;
        padding: 0.5rem 1rem;
        flex-basis: 70%;
        border-radius: 0px;
        margin: 0.5rem 0;
        box-shadow: 2px 2px 2px rgba(0, 1, 1, 0.4);
    }

    .info-box p {
        margin: 0;
    }

    .info-content {
        margin-bottom: 1rem;
    }

    .info-content .num {
        font-size: 1.5rem;
    }

    .info-box a {
        display: block;
        text-align: right;
        text-decoration: none;
        font-weight: bold;
    }

    /* START-hardcoding */

    #Booking h5 {
        background-color: #3e93d9;
        border-radius: 5px;
    }

    #Booking a {
        color: black;
    }

    #Earning a {
        color: black;
    }

    #Bus h5 {
        background-color: #009688;
        border-radius: 5px;
    }

    #Bus a {
        color: black;
    }


    #Route h5 {
        background-color: #f44336;
        border-radius: 5px;
    }

    #Route a {
        color: black;

    }

    #Seat {
        border-color: #A66314;
    }

    #Seat h5 {
        background-color: #A66314;
        border-radius: 5px;
    }

    #Seat a {
        color: black;
    }

    #Customer {
        border-color: #2D2B28;
    }

    #Customer h5 {
        background-color: #2D2B28;
        border-radius: 5px;
    }

    #Customer a {
        color: black;
    }

    #Admin {
        border-color: #607d8b;
    }

    #Admin h5 {
        background-color: #607d8b;
        border-radius: 5px;
    }

    #Earning h5 {
        background-color: #23bf29;
        border-radius: 5px;
    }

    #Admin a {
        color: black;
    }

    /* END-hardcoding */


    #admin .info-box {
        text-align: center;
        padding: 1rem 0;
        border: none;
    }

    #admin h4 {
        margin: 0.5rem 0;
    }

    #admin img {
        border-radius: 50%;
    }


    @media only screen and (min-width:1000px) {
        #main-content {
            flex-grow: 1;
            background-color: #FEF8CC;

        }

        .info-box {
            flex-basis: 20%;
        }

        #admin .info-box {
            flex-basis: 15%;
        }
    }
    
</style>