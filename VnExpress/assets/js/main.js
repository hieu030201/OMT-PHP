let listVideo = document.querySelectorAll('.video-list .vid');
let mainVideo = document.querySelector('.main-video')
let title = document.querySelectorAll('.main-video .title-video')

listVideo.forEach(video =>{
    video.onclick = () =>{
        listVideo.forEach(vid => vid.classList.remove('active'));
        video.classList.add('active');
        if(video.classList.contains('active')){
            let src = video.children[0].getAttribute('src');
            mainVideo.src = src;
            let text = video.children[1].innerHTML;
            title.innerHTML = text;
        }
    }
})

var modal = document.getElementById('modal-wrapper');
    window.onclick= function(event){
        if(event.target==modal){
            modal.style.display="none";
        }
}

$(document).ready(function(){
    $('#bar').click(function(){
        $('navbar_bar').toggleClass('show');
    })
})
// function myFunction() {
//     document.getElementById("area").borderColor='#333';
//   }

// $(document).ready(function(){
//     $('input').keydown(function(){
//         $()
//     })
// })

var feild = document.querySelector('textarea');
var backUp = feild.getAttribute('placeholder');
var btn = document.querySelector('.btn');
var clear = document.getElementById('clear');


feild.onfocus = function(){
    this.setAttribute('placeholder', '');
    this.style.borderColor='#333';
    btn.style.display='block';

}

feild.onblur = function(){
    this.setAttribute('placeholder',backUp);
    this.style.borderColor='#aaa';
}

clear.onclick = function(){
    btn.style.display='none';
    feild.value='';
}
