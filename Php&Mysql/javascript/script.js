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

document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the default form submission

    var formData = new FormData(this);

    fetch('process_contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message); // Show the message from the server
    })
    .catch(error => console.error('Error:', error));
});




