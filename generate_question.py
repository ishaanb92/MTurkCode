def generate_single_question(original,image1,image2):
    """
    Generates a single question i.e. for a given original image
    and a pair of generated images

    Returns the question string

    """

    question = """

      <div class = "container">
         <img src="{1}" alt="Image A" width="64" height="64">
         <p> Image A </p>
       </div>

       <div class = "container">
         <img src="{0}" alt="Original" width="64" height="64">
         <p> Original </p>
       </div>

        <div class = "container">
         <img src="{2}" alt="Image B" width="64" height="64">
         <p> Image B </p>
        </div>
         <br>
       <div>
         <input type="radio" id="{1}" name="{0}" value="{1}">
         <label for="{1}"></label>
         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <input type="radio" id="{2}" name="{0}" value="{2}">
         <label for="{2}"></label>
         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <input type="radio" id="{0}" name="{0}" value="Unsure">
         <label for="{0}">Unsure</label>
         <br>
         <br>
         <br>
       </div>
       <!-- 1 question ends -->
    """.format(
        original,
        image1,
        image2)

    return question


def generate_single_question_single_image(original,image1,image2,qid):
    """
    Generates a single question i.e. for a given original image
    and a pair of generated images

    Returns the question string

    Test function :: Generate HIT question for single image + all pairs

    """

    question = """
       <div class = "container">
         <img src="{0}" alt="Original" width="64" height="64">
         <p> Original </p>
       </div>

        <div class = "container">
         <img src="{1}" alt="Image A" width="64" height="64">
         <p> Image A </p>
        </div>

        <div class = "container">
         <img src="{2}" alt="Image B" width="64" height="64">
         <p> Image B </p>
        </div>
        <br/>
        <div class = "container">
         <input type="radio" id="{1}_{3}" name="{0}_{3}" value="{1}">
         <label for="{1}_{3}"></label>
         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <input type="radio" id="{2}_{3}" name="{0}_{3}" value="{2}">
         <label for="{2}_{3}"></label>
         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <input type="radio" id="{0}_{3}" name="{0}_{3}" value="Unsure">
         <label for="{0}_{3}">Unsure</label>
        </div>

       <!-- 1 question ends -->
    """.format(
        original,
        image1,
        image2,
        qid)

    return question
def generate_html_question(merged_questions):
    """
    Generates the final XML needed to create HIT

    Returns the generated XML as a string

    """
    upper_const_str = """
        <HTMLQuestion xmlns="http://mechanicalturk.amazonaws.com/AWSMechanicalTurkDataSchemas/2011-11-11/HTMLQuestion.xsd">
         <HTMLContent><![CDATA[

         <!-- YOUR HTML BEGINS -->
         <!DOCTYPE html>
         <html>
         <head>
             <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
             <script type='text/javascript' src='https://s3.amazonaws.com/mturk-public/externalHIT_v1.js'></script>
              <style>
                div.container {
                  display:inline-block;
                }

                p {
                  text-align:center;
                }
              </style>
              <style type="text/css">
                input[type="radio"]{margin: 0 10px 0 25px};}
              </style>
         </head>
         <body>
         <form name='helvetica' method='post' id='mturk_form' action='https://www.mturk.com/mturk/externalSubmit'><input type='hidden' value='' name='assignmentId'                id='assignmentId'/>
         <p>Select the between A and B, the image that seems more similar to the original, if unsure, select the "Unsure" option :</p>
        """

    lower_const_str = """
       <div>
         <button type="submit">Submit</button>
       </div>
    </form>
     <script language='Javascript'>turkSetAssignmentID();</script>
     </body></html>
     <!-- YOUR HTML ENDS -->
     ]]>
    </HTMLContent>

    <FrameHeight>600</FrameHeight>

    </HTMLQuestion>
    """
    final_xml = "" + upper_const_str + merged_questions + lower_const_str

    return final_xml

