var working = false;
/*
$('.login').on('submit', function (e) { 
    e.preventDefault();
    
    if (working) {
        return;
    }

    working = true;
    var $this = $(this),
    $state = $this.find('button > .state');
    $this.addClass('loading');
    $state.html('Authenticating');
    
    setTimeout(function () {
        $this.addClass('ok');
        $state.html('Welcome back!');

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: $('form').attr('action'),
            type: 'POST',
            data: $('form').serialize(),
            
            success: function (data) {
                window.location.replace('www.uol.com.br')
            }
                
        });

        setTimeout(function () {
            $state.html('Log in');
            $this.removeClass('ok loading');
            working = false;
            
        }, 4000);

    }, 3000);
});
*/