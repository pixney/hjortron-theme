var initModal = function () {

    var modal = $('.modal:not([data-initialized])');
    var remote = $('.modal.remote:not([data-initialized])');

    var loading = '<div class="modal-loading"><div class="active loader large"></div></div>';

    // Loading state
    modal.on('loading', function() {
        $(this).find('.modal-content').append(loading);
    });

    // Clear remote modals when closed.
    remote.on('hidden.bs.modal', function () {

        $(this).removeData('bs.modal');

        $(this).find('.modal-content').html(loading);
    });

    // Show loader for remote modals.
    remote.on('show.bs.modal', function () {
        $(this).find('.modal-content').html(loading);
    });

    // Handle ajax links in modals.
    modal.on('click', 'a.ajax, .pagination a', function (e) {

        e.preventDefault();

        var wrapper = $(this).closest('.modal-content');

        wrapper.append(loading);

        $.get($(this).attr('href'), function (html) {
            wrapper.html(html);
        });
    });

    // Handle ajax forms in modals.
    modal.on('submit', 'form.ajax', function (e) {

        e.preventDefault();

        var wrapper = $(this).closest('.modal-content');

        wrapper.append(loading);

        if ($(this).attr('method') == 'GET') {
            $.get($(this).attr('action'), $(this).serializeArray(), function (html) {
                wrapper.html(html);
            });
        } else {
            $.post($(this).attr('action'), $(this).serializeArray(), function (html) {
                wrapper.html(html);
            });
        }
    });

    // Mark as initialized.
    modal.attr('data-initialized', '');
    remote.attr('data-initialized', '');
};

$(document).ready(function () {
    initModal();
});

$(document).ajaxComplete(function () {
    initModal();
});
