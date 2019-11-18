<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>


<script src="<?= base_url(); ?>assets/js/tooltip.min.js"></script>
<script src="<?= base_url(); ?>assets/js/tether.min.js"></script>
<script src="<?= base_url(); ?>assets/js/drop.min.js"></script>
<script>
    // jQuery code for initializing a tooltip 
    $(document).ready(function() {
        // jQuery Attribute value selector to 
        // select the specified element and 
        // call the tooltip method on it 
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>

</html>