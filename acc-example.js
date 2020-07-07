// Animate CSS triggers on hover
$('h1').hover(
	function(){ $(this).addClass('animate__animated animate__shakeX') },
  function(){ $(this).removeClass('animate__animated animate__shakeX') }
);
