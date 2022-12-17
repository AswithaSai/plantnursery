count = 0;

function getBotResponse(input) {


    if (input == "hello") {
        return "Hello there!";
    } 
    if (input == "goodbye") {
        return "Talk to you later!";
    }


    if(input == "Where is your nursery"){
        return "At Jabalpur near Sadar.";
    }

    if(input =="what type of plants are available at your nursery?"  ||input =="what type of plants are available at your nursery?"||input=="What type of plants are available at your nursery?" ){
        return "We provide a wide range of plants types like rose,lily,hibiscus,chrysanthimum,etc.";
    }
    if(input =="in what mode can i pay money?" ||input =="In what mode can I pay money?"||input =="In what mode can i pay money?"||input =="in what mode can i pay money"){
        return "You can pay with cash or via upi when your product arrives at your doorstep.";
    }
    
    if(input =="what is the best plant in your nursery?" ||input =="What is the best plant in your nursery?"||input =="what is the best plant in your nursery"){
        return "Lily is most famous followed by rose.";
    }
    if(input == "Why should i buy plants from your nursery?" ||input == "why should i buy plants from your nursery?"||input == "why should i buy plants from your nursery"||input == "Why should i buy plants from your nursery"){
        return "Because we do not compromise in providing the best plants available in the market at the best and affordable price.";
    }
    if(input == "what are the timings of your nursery?"|| input == "What are the timings of your nursery?"||input == "what are the timings of your nursery" ){
        return "Our nursery is open from morning 9 AM to evening 6 PM,everyday.";
    }
    if(input == "can i return plants?" ||input == "Can I return plants?"||input == "can i return or replace plants?" ||input == "Can i return or replace plants?"){
        return "No, there is neither return nor replace policy,as we always provide the best plants.";
    }
    


    
    if((input == "Say a Joke" || input=="Say a joke" || input=="say a joke") && count==0){
        count = count +1;
        return "What do you call a pig that does Karate ---------- A pork chop"
    }''
    if((input == "Say a Joke" || input=="Say a joke" || input=="say a joke") && count==1){
        count = count +1;
        return "What do you call a Three eye's Fish ---------------- Because it is a Fiiish ";
    }
    if((input == "Say a Joke" || input=="Say a joke" || input=="say a joke") && count==2){
        count = count +1;
        return "What do you call a Slleping bull --------------  a bulldozer. "
    }
    if((input == "Say a Joke" || input=="Say a joke" || input=="say a joke") && count==3){
        count = count +1;
        return "Why cannot cycle cannot stand ------------------ Because it is Too Tired";
    }
    if(input == "Say a Joke" || input=="Say a joke" || input=="say a joke"  &&  count==4 ){
        count = count+1;
        return "Now I am Tired Of this Dont ask again this next time";
    }
    if(input=="Nice Joke"){
        return "Thanks for That";
    }
    else{
        return "I won't respond to that";
    }
}