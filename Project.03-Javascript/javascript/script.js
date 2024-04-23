function scrollToElement(elementSelector, instance = 0) {
    // Select all elements that match the given selector
    const elements = document.querySelectorAll(elementSelector);
    // Check if there are elements matching the selector and if the requested instance exists
    if (elements.length > instance) {
        // Scroll to the specified instance of the element
        elements[instance].scrollIntoView({ behavior: 'smooth' });
    }
}

const link1 = document.getElementById("link1");
const link2 = document.getElementById("link2");
const link3 = document.getElementById("link3");

link1.addEventListener('click', () => {
    scrollToElement('.header');
});

link2.addEventListener('click', () => {
    // Scroll to the second element with "header" class
    scrollToElement('.header', 1);
});

link3.addEventListener('click', () => {
    scrollToElement('.column');
});


//Rand Fu-Chan Audio
var audio = document.getElementById("myAudio");

function playRandomAudio() {
    var audioFiles = [
        'VO_JA_Furina_Elemental_Skill_1_03.ogg',
        'VO_JA_Furina_Feelings_About_Ascension_-_04.ogg',
        'VO_JA_Furina_Receiving_a_Gift_-_02.ogg',
        'VO_JA_Furina_About_Us_-_Relationships.ogg',
        'VO_JA_Furina_Good_Night.ogg',
        'VO_JA_Furina_Good_Afternoon.ogg',
        'VO_JA_Furina_Good_Morning.ogg',
        'VO_JA_Furina_Chat_-_Fun.ogg',
        'VO_JA_Furina_Hello.ogg'
    ];

    var randomIndex = Math.floor(Math.random() * audioFiles.length);

    audio.src = 'audio/voices/' + audioFiles[randomIndex];

    audio.play();
}

//Button Press Alert

function showPopup() {
    alert("Try Pressing On The Character Logo!");
}

//Form Filling

 // Function to handle form submission
 function handleSubmit(event) {
    event.preventDefault(); // Prevents the default form submission
    
    // Form validation
    const form = event.target;
    const fullName = form.elements.fullName.value.trim();
    const email = form.elements.email.value.trim();
    const message = form.elements.message.value.trim();

    // Check if email is valid
    if (!isValidEmail(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    // Here you can perform additional validation if needed

    // If all validations pass, show success message and reset form
    alert("Your message has been sent!");
    form.reset();
}

// Function to validate email format
function isValidEmail(email) {
    // Regular expression for email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Add event listener to the form
document.getElementById("contactForm").addEventListener("submit", handleSubmit);

//Background Music Pause

document.addEventListener("DOMContentLoaded", function() {
    const toggleAudioBtn = document.getElementById("toggleAudioBtn");
    const audioBackground = document.querySelector(".audio-background");

    let isPaused = false;

    // Function to toggle between pausing and playing the audio
    function toggleAudio() {
        if (isPaused) {
            audioBackground.play();
            toggleAudioBtn.textContent = "Pause Audio Background";
        } else {
            audioBackground.pause();
            toggleAudioBtn.textContent = "Play Audio Background";
        }
        isPaused = !isPaused;
    }

    // Add event listener to the toggle audio button
    toggleAudioBtn.addEventListener("click", function() {
        toggleAudio();
    });
});


