
            $(document).ready(function(){

let i = 0;

var bannerRef = firebase.database().ref('banner');


var bannerStorageRef = firebase.storage().ref();

bannerStorageRef.child('portfolio-4bf1c.appspot.com/').listAll().then(function(result){

    result.items.forEach(function(imageRef){
        console.log(imageRef.toString())
        imageRef.getDownloadURL().then(function(downloadURL){
            i++;
            var active = i==1? "active" : "";
            $('<div class="item '+active+'"><img src="'+ downloadURL+'"></div>')
            .appendTo('.carousel-inner');
            $('<li data-target="#myCarousel" data-slide-to="'+i+'" ></li>').
            appendTo('.carousel-indicators');
        })
        $('#myCarousel').carousel();
    })
})
})



// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDVVWLah77CZOVjBqBweWbuPJpnhrHVg_Y",
  authDomain: "portfolio-4bf1c.firebaseapp.com",
  databaseURL: "https://portfolio-4bf1c-default-rtdb.firebaseio.com",
  projectId: "portfolio-4bf1c",
  storageBucket: "portfolio-4bf1c.appspot.com",
  messagingSenderId: "296534124626",
  appId: "1:296534124626:web:133b828c2ecffa7d4f978b",
  measurementId: "G-EQ2J4C5ZGP"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

