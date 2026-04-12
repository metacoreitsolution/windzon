/* Homepage quote form — AJAX POST to assets/php/quote.php */
$(function () {
    var form = $('#quote-form');
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
                }, 1500);
            })
            .fail(function (xhr) {
                formMessages.removeClass('success').addClass('error');
                var msg =
                    xhr.responseText && xhr.responseText.length
                        ? xhr.responseText
                        : 'Could not send your request. Please try again.';
                formMessages.text(msg);
            })
            .always(function () {
                setLoading(false);
            });
    });
});
