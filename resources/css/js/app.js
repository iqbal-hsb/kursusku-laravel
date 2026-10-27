import './bootstrap';

import 'bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

$(document).ready(function () {
    $(document).on('change', '#course_id', function () {
        const id = $(this).val();

        if (!id) {
            $('#availability')
                .removeClass('alert-success alert-danger border-success border-danger text-success text-danger')
                .addClass('alert-light border')
                .html('<i class="bi bi-info-circle me-2"></i> Pilih kursus untuk melihat sisa kursi.');
            return;
        }

        $('#availability')
            .removeClass('alert-light border-success border-danger text-success text-danger')
            .addClass('alert-light border')
            .html('<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Memuat ketersediaan...');

        const urlEndpoint = '/courses/' + id + '/availability';

        $.ajax({
            url: urlEndpoint,
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                $('#availability')
                    .removeClass('alert-light border text-secondary')
                    .addClass('alert-success border-success text-success')
                    .html('<strong>' + data.remaining + ' kursi</strong> tersisa untuk <strong>' + data.course + '</strong>.');
            },
            error: function (xhr, status, error) {
                console.error("Ajax Error: ", status, error);
                $('#availability')
                    .removeClass('alert-light border text-secondary')
                    .addClass('alert-danger border-danger text-danger')
                    .html('<i class="bi bi-exclamation-triangle me-2"></i> Gagal memuat ketersediaan kursus.');
            }
        });
    });
});