'use strict';
var t;
var workTime = 10;
var breakTime = 15;
var minuteAlarm = document.createElement('audio');
minuteAlarm.src = 'https://www.soundhelix.com/examples/mp3/SoundHelix-Son1.mp3';
minuteAlarm.volume = 0.0;
function timer(minutes) {
    var sec = minutes * 60;
    var min, seconds, time;
    var start = new Date().getTime();
    start = start + (sec * 1000);
    timedCount();
    function timedCount() {
        var newTime = start - new Date().getTime();
        // decrement seconds
        sec = Math.floor(newTime / 1000);
        console.log('sec' + sec);
        // break time in seconds
        var breakSec = breakTime * 60;
        // if timer counts break time, output break time, remove resume btn,
        // stop audio from playing and sound alarm, disable radio btns
        if (sec == breakSec) {
            document.getElementById('main-output').classList.remove('blue');
            document.getElementById('main-output').classList.add('green');
            document.getElementById('work-output').innerHTML = 'WORK TIME';
            stopAudio();
            playAlarm();
            enableRadioBtn(false);
            console.log('<<beep>> Break time start!');
        }
        // if time one minute till break, turn music volume down,
        // play alarm and after 3 seconds turn music up
        if ((sec - breakSec) == 60) {
            //    console.log('volume before: '+audio.volume);
            audio.volume = 0.1;
            minuteAlarm.volume = 0.4;
            //    console.log('volume decreased: '+audio.volume);
            playAlarm();
            //    console.log('<<beep>> one minute till end. of work time');
        }
        else if ((sec - breakSec) == 57) {
            audio.volume = document.getElementById('volume').value / 100;
            //console.log('volume after: '+audio.volume);
        }
        // for displaying work time to 0, and break time to 0
        (sec < breakSec) ? time = sec : time = sec - breakSec;
        // get minutes, and if minutes less than 9 get zero in front
        min = Math.floor(time / 60);
        min = (min <= 9) ? '0' + min : min;
        // get seconds, and if less than 9 get zero in front
        seconds = time % 60;
        seconds = (seconds <= 9) ? '0' + seconds : seconds;
        // run if c not zero
        if (sec !== -1) {
            // set timeout to 1 sec
            t = setTimeout(function () {
                timedCount();
            }, 100);
            //console.log('timer: ' + min + ':' + seconds);
            return document.getElementById('output').innerHTML = min + ':' + seconds;
        }
        // else stop counting
        stopCount();
        playAlarm();
        //    console.log('timer: 00:00');
        document.getElementById('main-output').classList.remove('green');
        document.getElementById('main-output').classList.add('red');
        document.getElementById('work-output').innerHTML = 'Session ended.';
        return document.getElementById('output').innerHTML = '00:00';
    }
}
// stop counting
function stopCount() {
    console.log('stop countdown!');
    return clearTimeout(t);
}
// start btn, show resume btn, show work time in html, enable stop btn,
// stop count time, start play music, start timer function count work + break time
document.getElementById('start').addEventListener('click', function () {
    var wholeTime = breakTime + workTime;
    document.getElementById('main-output').classList.remove('red');
    document.getElementById('main-output').classList.add('blue');
    document.getElementById('work-output').innerHTML = 'BREAK TIME';
    document.getElementById('stop').disabled = false;
    stopCount();
    playAudio();
    minuteAlarm.volume = 0.0;
    playAlarm();
    enableRadioBtn(true);
    timer(wholeTime);
});
// stop btn, stop counting time, stop audio, enable resume btn
document.getElementById('stop').addEventListener('click', function () {
    stopCount();
    stopAudio();
});
// ambiental music
// chromanova.fm http://176.31.123.212:9192/; |  Nirvana meditation http://81.219.54.6:8004/; | Ambient sleeping pill http://163.172.166.114:80/asp-s
// drumm n bass
// bassdrive http://50.7.70.66:8200/; | DnBHeaven http://95.168.216.197:8555/; | DnB liquified http://198.105.223.94:8000/;
// global audio elements
var audio = document.createElement('audio');
audio.src = "fire.mp3";
audio.volume = 0.2;
var radioList = document.getElementById('radio-list');
var list = ["fire.mp3", "Memories.mp3", "Perfect.mp3", "fire.mp3", "Memories.mp3", "Perfect.mp3"];
radioList.addEventListener('change', function () {
    var num = this.value;
    audio.src = list[num];
    stopAudio();
    playAudio();
    //    console.log('audio src:'+audio.src);
});
function enableRadioBtn(x) {
    if (x) {
        document.getElementById('radio-list').disabled = false;
    }
    else {
        document.getElementById('radio-list').disabled = true;
    }
}
// play music
function playAudio() {
    audio.play();
    console.log('play audio!');
}
// pause music
function stopAudio() {
    audio.pause();
    console.log('paused audio!');
}
// change volume of audio
document.getElementById('volume').addEventListener('change', function () {
    audio.volume = this.value / 100;
    //    console.log('audio volume: '+audio.volume);
});
// create audio element, break alarm or minute alarm and play it
function playAlarm(x) {
    //minuteAlarm.src = '';
    //(x)? minuteAlarm.src = '/images/break-alarm.mp3'; : minuteAlarm.src = '/images/minute-alarm.mp3';
    minuteAlarm.play();
}
// event listeners on break and work time buttons
document.getElementById('timer-increase').addEventListener('click', function () {
    timerInput(true);
});
document.getElementById('timer-decrease').addEventListener('click', function () {
    timerInput(false);
});
document.getElementById('break-increase').addEventListener('click', function () {
    breakInput(true);
});
document.getElementById('break-decrease').addEventListener('click', function () {
    breakInput(false);
});
// function increment or decrement breakTime
function breakInput(increment) {
    var breakInput = document.getElementById('break-input');
    // breakTime must be between 15 and 5 and output in html
    if (breakTime < 30 && breakTime > 15) {
        // if increment true increment breakTime, else decrement
        (increment) ? breakTime++ : breakTime--;
    }
    else if (breakTime == 15 && increment == true) {
        breakTime++;
    }
    else if (breakTime == 30 && increment == false) {
        breakTime--;
    }
    console.log('break time: ' + breakTime);
    return breakInput.innerHTML = breakTime;
}
// function increment or decrement workTime
function timerInput(increment) {
    var timerInput = document.getElementById('timer-input');
    // workTime must be between 10 and 55 and output in html
    if (workTime < 10 && workTime > 1) {
        // if increment true increment workTime, else decrement
        (increment) ? workTime++ : workTime--;
    }
    else if (workTime == 1 && increment == true) {
        workTime++;
    }
    else if (workTime == 10 && increment == false) {
        workTime--;
    }
    console.log('work time: ' + workTime);
    return timerInput.innerHTML = workTime;
}
