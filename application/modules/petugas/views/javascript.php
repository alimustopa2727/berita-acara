<script src="<?=base_url()?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="<?=base_url()?>assets/node_modules/popper/popper.min.js"></script>
<script src="<?=base_url()?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?=base_url()?>assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="<?=base_url()?>assets/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?=base_url()?>assets/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?=base_url()?>assets/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="<?=base_url()?>assets/node_modules/raphael/raphael-min.js"></script>
<script src="<?=base_url()?>assets/node_modules/morrisjs/morris.min.js"></script>
<script src="<?=base_url()?>assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="<?=base_url()?>assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- Chart JS -->
<script src="<?=base_url()?>assets/dist/js/dashboard1.js"></script>

<script src="<?=base_url()?>assets/node_modules/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->

<script>
$(document).ready(function() {
    $('#myTable').DataTable({
            dom: 'lBfrtip', // Menambahkan opsi panjang tampilan (length) pada daftar elemen DOM
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            lengthMenu: [10, 25, 50, 100], // Menentukan opsi panjang yang tersedia
            pageLength: 10 // Menentukan panjang awal tampilan halaman
        }

    );
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' +
                            group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });
});
$('#example23').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 5000);
</script>

<script>
<?php if ($this->session->flashdata('sweet_error')): ?>
swal({
    icon: 'error',
    title: 'Oops...',
    text: '<?php echo $this->session->flashdata('sweet_error'); ?>',
    timer: 3000,
    buttons: false
});
<?php endif;?>

<?php if ($this->session->flashdata('sweet_success')): ?>
swal({
    title: "Success!",
    text: "<?php echo $this->session->flashdata('sweet_success'); ?>",
    icon: "success",
    timer: 3000,
    buttons: false
});
<?php endif;?>

<?php if ($this->session->flashdata('sudah_logout')): ?>
swal({
    title: "Oops...",
    text: "<?php echo $this->session->flashdata('sudah_logout'); ?>",
    icon: "error",
    timer: 3000,
    buttons: false
});
<?php endif;?>
</script>
<script src="<?=base_url()?>assets/node_modules/switchery/dist/switchery.min.js"></script>
<script src="<?=base_url()?>assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript">
</script>
<script src="<?=base_url()?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?=base_url()?>assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"
    type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url()?>assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
<script>
$(document).ready(function() {
    // Switchery
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    elems.forEach(function(html) {
        new Switchery(html, $(html).data());
    });

    // For select 2
    $(".select2").select2();
    $('.selectpicker').selectpicker();

    // Bootstrap-TouchSpin
    $(".vertical-spin").TouchSpin({
        verticalbuttons: true,
        verticalupclass: 'ti-plus',
        verticaldownclass: 'ti-minus'
    });

    var vspinTrue = $(".vertical-spin").TouchSpin({
        verticalbuttons: true
    });

    if (vspinTrue) {
        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
    }

    $("input[name='tch1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%'
    });

    $("input[name='tch2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        maxboostedstep: 10000000,
        prefix: '$'
    });

    $("input[name='tch3']").TouchSpin();

    $("input[name='tch3_22']").TouchSpin({
        initval: 40
    });

    $("input[name='tch5']").TouchSpin({
        prefix: "pre",
        postfix: "post"
    });

    // For multiselect
    $('#pre-selected-options').multiSelect();
    $('#optgroup').multiSelect({
        selectableOptgroup: true
    });

    $('#public-methods').multiSelect();

    $('#select-all').click(function() {
        $('#public-methods').multiSelect('select_all');
        return false;
    });

    $('#deselect-all').click(function() {
        $('#public-methods').multiSelect('deselect_all');
        return false;
    });

    $('#refresh').on('click', function() {
        $('#public-methods').multiSelect('refresh');
        return false;
    });

    $('#add-option').on('click', function() {
        $('#public-methods').multiSelect('addOption', {
            value: 42,
            text: 'test 42',
            index: 0
        });
        return false;
    });

    $(".ajax").select2({
        ajax: {
            url: "https://api.github.com/search/repositories",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
            },
            processResults: function(data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;
                return {
                    results: data.items,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatRepo, // omitted for brevity, see the source of this page
        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    });
});
</script>



<script>
function showLogoutAlert() {
    swal({
        title: "Logout",
        text: "Apakah Anda yakin ingin keluar?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willLogout) => {
        if (willLogout) {
            window.location.href = "<?=base_url()?>login/auth/logout";
        }
    });
}
</script>