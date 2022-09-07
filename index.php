<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <style>
            h1 {
                color: indigo;
                font-family: georgia;
                font-size: 30pt;
            }
            h2 {
                color: dodgerblue;
                font-size: 20pt;
            }
            
            body{
                margin: auto;
                padding: 3%;
                width: 90%;
            }

            figure {
                border: thin solid darkslategray;
                border-radius: 3%;
                padding: 3%;
                text-align: center;
            }

            figcaption {
                color: black;
                font-style: italic;
                text-align: center;
            }

            img{
                border-radius: 3%;
                max-width: 100%
            }

            .right{
                float: right;
                margin-left: 3%;
            }

            .small {
                width: 20%;
            }
            
            .header{
                grid-area: header;
                grid-column: 1 / 3;
                padding: .3em;
                margin: .3em;
            }  
            .public-files{
                grid-area: public-files;
                padding: .3em;
                margin: .3em;
            }

            .supporting-files{
                grid-area: supporting-files;
                padding: .3em;
                margin: .3em;
            }
            .grader-notes{
                grid-area: grader-notes;
                padding: .3em;
                margin: .3em;
            }
            .grid-layout{
                border-bottom: thin dashed navy;
                display: inline-grid;
                grid-template-columns: 25% 25% 50%;
                grid-template-areas: "header header header"
                    "public-files supporting-files grader-notes"; 
                padding: .3em;
                margin: .3em;
                width: 100%;    
            }
        </style>
        <title>CS 008 - Vanessa Tran</title>
        <meta name="author" content="Vanessa Tran">
        <meta name="description" content="A site map to all my assignments for CS008 at UVM.">
    </head>
    <body>
        <figure class="right small">
            <img alt="Vanessa Tran in 2018" src="images/vanessa.jpg" style="max-width: 100%;">
            <figcaption>This is me, in front of a bush.</figcaption>
        </figure>

        <h1>CS 008 - <em>Section C</em></h1>
        <h2>Vanessa Tran - Site Map</h2>
        
        <h2>Lab one - Setting up the main index page.</h2>
        <p><a href="test-page.php">Testing Page</a></p>
        <p><a href="ADMIN/admin.php">My Admin Folder</a></p>
        
        <section class="grid-layout">
            <h2 class="header">Final - Photography Portfolio</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="final/home.php">home.php</a></p>
                <p><a href="final/portfolio.php">portfolio.php</a></p>
                <p><a href="final/about-me.php">about-me.php</a></p>
                <p><a href="final/feedback.php">feedback.php</a> Displays data</p>
            </section>
      
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="final/sql.php">sql.php</a></p>
                <p><a href="final/">records.png</a></p>
                <p><a href="final/css/custom.css">custom.css</a></p>
                <p><a href="final/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="final/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="final/images/wireframe.jpg">wireframe.jpg</a></p>
                <p><a href="final/images/tablet-wireframe.jpg">tablet-wireframe.jpg</a></p>
                <p><a href="final/images/phone-wireframe.jpg">phone-wireframe.jpg</a></p>
            </section>
            
            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p>For some reason, when I check validation for my php files, the validator gives me a 503 error. This wasn't happening yesterday, but I decided to submit just for time management sake. It's happening to my old labs as well. My CSS files validate with no issues.</p>
            </section>   
        </section>
        
        <section class="grid-layout">
            <h2 class="header">Lab Nine - Saving form's data</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab9/index.php">index.php</a> Box Shadows, Animations</p>
                <p><a href="lab9/detail.php">detail.php</a> Text Shadows</p>
                <p><a href="lab9/contest.php">contest.php</a></p>
                <p><a href="lab9/form.php">form.php</a> Gradients, Transitions</p>
            </section>
      
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab9/sql.php">sql.php</a></p>
                <p><a href="lab9/images/records.png">records.png</a></p>
                <p><a href="lab9/css/custom.css">custom.css</a></p>
                <p><a href="lab9/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab9/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab9/images/wireframe1.jpg">wireframe.jpg</a></p>
                <p><a href="lab9/images/tablet-wireframe1.jpg">tablet-wireframe.jpg</a></p>
                <p><a href="lab9/images/phone-wireframe1.jpg">phone-wireframe.jpg</a></p>
            </section>
            
            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>   
        </section>
        
        <section class="grid-layout">
            <h2 class="header">Lab Eight - Database to display data</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab8/index.php">index.php</a> Box Shadows, Animations</p>
                <p><a href="lab8/detail.php">detail.php</a> Text Shadows</p>
                <p><a href="lab8/contest.php">contest.php</a></p>
                <p><a href="lab8/form.php">form.php</a> Gradients, Transitions</p>
            </section>
      
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab8/sql.php">sql.php</a></p>
                <p><a href="lab8/images/records.png">records.png</a></p>
                <p><a href="lab8/css/custom.css">custom.css</a></p>
                <p><a href="lab8/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab8/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab8/images/wireframe1.jpg">wireframe.jpg</a></p>
                <p><a href="lab8/images/tablet-wireframe1.jpg">tablet-wireframe.jpg</a></p>
                <p><a href="lab8/images/phone-wireframe1.jpg">phone-wireframe.jpg</a></p>
            </section>
            
            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>   
        </section>
        
        <section class="grid-layout">
            <h2 class="header">Lab Seven - Joe's Pond</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab7/index.php">index.php</a> Box Shadows, Animations</p>
                <p><a href="lab7/detail.php">detail.php</a> Text Shadows</p>
                <p><a href="lab7/contest.php">contest.php</a></p>
                <p><a href="lab7/form.php">form.php</a> Gradients, Transitions</p>
            </section>
      
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab7/css/custom.css">custom.css</a></p>
                <p><a href="lab7/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab7/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab7/images/wireframe1.jpg">wireframe.jpg</a></p>
                <p><a href="lab7/images/tablet-wireframe1.jpg">tablet-wireframe.jpg</a></p>
                <p><a href="lab7/images/phone-wireframe1.jpg">phone-wireframe.jpg</a></p>
            </section>
            
            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>   
        </section>
        
        <section class="grid-layout">
            <h2 class="header">Lab Six - Making a world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab6/index.php">index.php</a> Box Shadows, Animations</p>
                <p><a href="lab6/detail.php">detail.php</a> Text Shadows</p>
                <p><a href="lab6/form.php">form.php</a> Gradients, Transitions</p>
            </section>
      
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab6/css/custom.css">custom.css</a></p>
                <p><a href="lab6/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab6/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab6/images/wireframe.jpg">wireframe.jpg</a></p>
                <p><a href="lab6/images/tablet-wireframe.jpg">tablet-wireframe.jpg</a></p>
                <p><a href="lab6/images/phone-wireframe.jpg">phone-wireframe.jpg</a></p>
            </section>
            
            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>   
        </section>
        
        <section class="grid-layout">
            <h2 class="header">Lab Five - Making a world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab5/index.php">index.php</a> Box Shadows, Animations</p>
                <p><a href="lab5/detail.php">detail.php</a> Text Shadows</p>
                <p><a href="lab5/form.php">form.php</a> Gradients, Transitions</p>
            </section>
      
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab5/css/custom.css">custom.css</a></p>
                <p><a href="lab5/images/wireframe.jpg">wireframe.jpg</a></p>
            </section>
            
            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>   
        </section>
        
        <section class="grid-layout">
            <h2 class="header">Lab Four - Making a world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab4/index.php">index.php</a></p>
                <p><a href="lab4/detail.php">detail.php</a></p>
                <p><a href="lab4/form.php">form.php</a></p>
            </section>
      
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab4/css/custom.css">custom.css</a></p>
                <p><a href="lab4/images/wireframe.jpg">wireframe.jpg</a></p>
            </section>
            
            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>   
        </section>
        
        <section class="grid-layout">
            <h2 class="header">Lab Three - Making a world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab3/index.php">index.php</a></p>
                <p><a href="lab3/detail.php">detail.php</a></p>
                <p><a href="lab3/form.php">form.php</a></p>
            </section>
      
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab3/css/custom.css">custom.css</a></p>
                <p><a href="lab3/images/wireframe.jpg">wireframe.jpg</a></p>
            </section>
            
            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>   
        </section>
        
        <section class="grid-layout">
            <h2 class="header">Lab Two - Making a world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab2/index.php">index.php</a></p>
            </section>
      
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab2/css/custom.css">custom.css</a></p>
            </section>
            
            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>   
        </section>
    </body>
</html>