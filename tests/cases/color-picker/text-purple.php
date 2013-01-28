<!doctype html>
<html>
<head>
    <script type="text/javascript" src="../../js/case.js"></script>
    <?php $uri = '../../../src/'; include __DIR__ . '/../../../src/include.php'; ?>
</head>
<body class="simple">
    <script type="text/javascript">
        rangy.init();
    </script>
    <div class="test-1">
        <h1>Text Purple Button 1: Word Group Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis {dui id erat pellentesque et rhoncus} nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis <span class="cms-purple">{dui id erat pellentesque et rhoncus}</span> nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-1', function(input) {
            var colorMenuBasic = getLayoutElement(input).find('.raptor-ui-color-menu-basic');
            colorMenuBasic.trigger('click');
            var purple = $('.raptor-ui-color-menu-basic-menu [data-color=purple]');
            console.log(purple);
            purple.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            var colorMenuBasicValue = colorMenuBasic.toString();

            if (!colorMenuBasicValue === 'Purple'){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-2">
        <h1>Text Purple Button 2: Single Word Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur {adipiscing} elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur <span class="cms-purple">{adipiscing}</span> elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-2', function(input) {
            var colorMenuBasic = getLayoutElement(input).find('.raptor-ui-color-menu-basic');
            colorMenuBasic.trigger('click');
            var purple = $('.raptor-ui-color-menu-basic-menu [data-color=purple]');
            purple.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            var colorMenuBasicValue = colorMenuBasic.toString();

            if (!colorMenuBasicValue === 'Purple'){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-3">
        <h1>Text Purple Button 3: Part Word Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pel{lentesqu}e et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pel<span class="cms-purple">{lentesqu}</span>e et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-3', function(input) {
            var colorMenuBasic = getLayoutElement(input).find('.raptor-ui-color-menu-basic');
            colorMenuBasic.trigger('click');
            var purple = $('.raptor-ui-color-menu-basic-menu [data-color=purple]');
            purple.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            var colorMenuBasicValue = colorMenuBasic.toString();

            if (!colorMenuBasicValue === 'Purple'){
                throw new Error('Button is not active');
            }
        });
    </script>

     <div class="test-4">
        <h1>Text Purple Button 4: Multi-Paragraph Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui {id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse} interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui <span class="cms-purple">{id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </span></p>
                <p><span class="cms-purple">
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse}</span> interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-4', function(input) {
            var colorMenuBasic = getLayoutElement(input).find('.raptor-ui-color-menu-basic');
            colorMenuBasic.trigger('click');
            var purple = $('.raptor-ui-color-menu-basic-menu [data-color=purple]');
            purple.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            var colorMenuBasicValue = colorMenuBasic.toString();

            if (!colorMenuBasicValue === 'Purple'){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-5">
        <h1>Text Purple Button 5: Paragraph Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    <span class="cms-purple">{Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </span></p>
                <p><span class="cms-purple">
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}</span>
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-5', function(input) {
            var colorMenuBasic = getLayoutElement(input).find('.raptor-ui-color-menu-basic');
            colorMenuBasic.trigger('click');
            var purple = $('.raptor-ui-color-menu-basic-menu [data-color=purple]');
            purple.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            var colorMenuBasicValue = colorMenuBasic.toString();

            if (!colorMenuBasicValue === 'Purple'){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-6">
        <h1>Text Purple Button 6: Empty Selection in Word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspen{}disse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. <span class="cms-purple">{Suspendisse}</span> interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-6', function(input) {
            var colorMenuBasic = getLayoutElement(input).find('.raptor-ui-color-menu-basic');
            colorMenuBasic.trigger('click');
            var purple = $('.raptor-ui-color-menu-basic-menu [data-color=purple]');
            purple.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            var colorMenuBasicValue = colorMenuBasic.toString();

            if (!colorMenuBasicValue === 'Purple'){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-7">
        <h1>Text Purple Button 7: Empty Selection at the Beginning of a Word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada {}hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada <span class="cms-purple">{hendrerit}</span> velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-7', function(input) {
            var colorMenuBasic = getLayoutElement(input).find('.raptor-ui-color-menu-basic');
            colorMenuBasic.trigger('click');
            var purple = $('.raptor-ui-color-menu-basic-menu [data-color=purple]');
            purple.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            var colorMenuBasicValue = colorMenuBasic.toString();

            if (!colorMenuBasicValue === 'Purple'){
                throw new Error('Button is not active');
            }
        });
    </script>
</body>
</html>