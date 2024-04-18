        <div class="<?php echo $timetableHeaderContainerClass ?>">
            <?php if (file_exists("image/specialOpening.png")) { ?>
                <a class="text-reset" href="#specialOpening">
                    <span class="<?php echo $timetableHeaderClass ?>">Horaires</span>
                    <i class="px-2 fs-5 bi bi-exclamation-diamond text-danger" title=" !! Attention horaires modifiés !! "></i>
                </a>
            <?php } else { ?>
                <span class="<?php echo $timetableHeaderClass ?>">Horaires</span>
            <?php } ?>
        </div>

        <div class="ms-3 text-center">
            <table class="table border-dark border-2 fw-bold">
                <tr class="border-2 border-start-0 border-end-0 border-dark">
                    <td class="text-end border-0">Lundi:</td>
                    <td class="text-center border-0">15h00</td>
                    <td class="text-center border-0">-</td>
                    <td class="text-center border-0">22h00</td>
                    <td class="px-2 border-0"></td>
                </tr>
                <tr class="border-2 border-top-0 border-start-0 border-end-0 border-dark">
                    <td class="text-end border-0">Mardi:</td>
                    <td class="text-center border-0" colspan="3">fermé</td>
                    <td class="px-2 border-0"></td>
                </tr>

                <tr class="border-2 border-top-0 border-start-0 border-end-0 border-dark">
                    <td class="text-end border-0">Mercredi:</td>
                    <td class="text-center border-0">14h00</td>
                    <td class="text-center border-0">-</td>
                    <td class="text-center border-0">22h00</td>
                    <td class="px-2 border-0"></td>
                </tr>
                <tr class="border-2 border-top-0 border-start-0 border-end-0 border-dark">
                    <td class="text-end border-0">Jeudi:</td>
                    <td class="text-center border-0">14h00</td>
                    <td class="text-center border-0">-</td>
                    <td class="text-center border-0">00h00</td>
                    <td class="px-2 border-0"></td>
                </tr>
                <tr class="border-2 border-top-0 border-start-0 border-end-0 border-dark">
                    <td class="text-end border-0">Vendredi:</td>
                    <td class="text-cente border-0r">15h00</td>
                    <td class="text-center border-0">-</td>
                    <td class="text-center border-0">01h00</td>
                    <td class="px-2 border-0"></td>
                </tr>
                <tr class="border-2 border-top-0 border-start-0 border-end-0 border-dark">
                    <td class="text-end border-0">Samedi:</td>
                    <td class="text-center border-0">11h00</td>
                    <td class="text-center border-0">-</td>
                    <td class="text-center border-0">01h00</td>
                    <td class="px-2 border-0"></td>
                </tr>
                <tr class="border-2 border-top-0 border-bottom-0 border-start-0 border-end-0 border-dark">
                    <td class="text-end border-0 pb-0">Dimanche:</td>
                    <td class="text-center border-0 pb-0">11h00</td>
                    <td class="text-center border-0 pb-0">-</td>
                    <td class="text-center border-0 pb-0">21h00</td>
                    <td class="px-2 border-0 pb-0"></td>
                </tr>
                <tr class="border-2 border-top-0 border-start-0 border-end-0 border-dark">
                    <td class="text-end border-0 pt-0">&nbsp;</td>
                    <td class="text-center border-0 pt-0 fw-bold text-danger" colspan="3">Cuisine non stop</td>
                    <td class="px-2 border-0 pt-0"></td>
                </tr>
            </table>

            <div class="py-2 fs-5 fw-bold text-danger text-center">Sur demande, nous ouvrons en dehors de ces horaires pour les groupes</div>
        </div>

        <?php if (file_exists("image/specialOpening.png")) { ?>
        <div class="m-3 text-center">
            <img src="image/specialOpening.png" class="img-fluid" id="specialOpening" title="L'Amuse-Bar: horaires modifiés" />
        </div>
        <?php } ?>
