/*-------------------------
    Ajax Contact Form
---------------------------*/
$(function () {
    var form = $('#contact-form');
    if (!form.length) {
        return;
    }

    var formMessages = form.find('.form-messege');
    var $submit = form.find('button[type="submit"]');
    var btnHtml = $submit.html();

    function setLoading(loading) {
        if (loading) {
            $submit.prop('disabled', true);
            $submit.html(
                '<i class="fas fa-spinner fa-spin" aria-hidden="true"></i> Sending...'
            );
        } else {
            $submit.prop('disabled', false);
            $submit.html(btnHtml);
        }
    }

    form.on('submit', function (e) {
        e.preventDefault();
        formMessages.removeClass('error success').text('');
        setLoading(true);

        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize(),
        })
            .done(function (response) {
                formMessages.removeClass('error').addClass('success');
                formMessages.text(response);
                form.find('input, textarea, select').val('');
                var redirect = form.data('redirect') || 'thank-you.php';
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            })
            .fail(function (xhr) {
                formMessages.removeClass('success').addClass('error');
                if (xhr.responseText) {
                    formMessages.text(xhr.responseText);
                } else {
                    formMessages.text(
                        'Oops! An error occured and your message could not be sent.'
                    );
                }
            })
            .always(function () {
                setLoading(false);
            });
    });
});
