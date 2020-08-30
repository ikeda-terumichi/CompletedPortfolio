<script src="https://unpkg.com/scrollreveal"></script>
<script>

  window.sr = ScrollReveal({ reset: true ,mobile: true});

  sr.reveal( '.decoration-inside', { 
    easing: 'ease', 
    origin: 'left' , 
    distance: '100%', 
    duration: 1500 , 
    scale: 0.1, 
    delay :100 ,
    opacity:0,});

  sr.reveal( '.right', { 
    origin: 'right' , 
    distance: '100%', 
    duration: 1500 , 
    scale: 1.0, 
    delay :500 ,
    opacity: 0.5,});

</script>