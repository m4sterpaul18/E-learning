<!-- loader -->
<div class="loader-wrapper">
    <img src="/e-learning/public/assets/gif/loader.gif" alt="">
</div>
<main class="p-5 quiz-size">
   
   <div class="quiz-wrapper" id="quiz-div">
   <a class="btn btn-primary btn-lg mb-3" href="/e-learning/public/lesson"><i class="fas fa-arrow-circle-left"></i> Back</a>
       <h1 class="text-center my-3">Chapter 9 Quiz</h1>
       <!-- question 1 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3>1. It is the numbers of elements in an array?</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q1" value="a"> Variables
                    </li>
                    <li>
                        <input type="radio" name="q1" value="b"> Multidimensional

                    </li>
                    <li>
                        <input type="radio" name="q1" value="c"> Size
                    </li>
                    <li>
                        <input type="radio" name="q1" value="d"> List
                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 2 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 2. This type of array are also know as matrices and they arrays 
                    having two or more subscripts.
        </h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q2" value="a"> One-Dimensional Array
                    </li>
                    <li>
                        <input type="radio" name="q2" value="b"> Two-Dimensional Array
                    </li>
                    <li>
                        <input type="radio" name="q2" value="c"> Multidimensional Array
                    </li>
                    <li>
                        <input type="radio" name="q2" value="d"> Multi-subscript Array
                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 3 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 3. What is the expected output of the program?</h3> 
                <pre>
            #include &lt;stdio.h&gt;
            #include &lt;conio.h&gt;
                void display(int a)
                {
                    printf(“%d”, a);
                }
                int main()
                {
                    int c[ ]={2,3,4,5};
                    display(c[2]);
                    return 0;
                }

                </pre>
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q3" value="a"> 2
                    </li>
                    <li>
                        <input type="radio" name="q3" value="b"> 3
                    </li>
                    <li>
                        <input type="radio" name="q3" value="c"> 4
 
                    </li>
                    <li>
                        <input type="radio" name="q3" value="d"> 5

                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 4 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 4.What is the correct syntax of initialization of one-dimensional array?</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q4" value="a"> int c[5] = {1,2,3,4,5}, {1,2,3,4,5}, {1,2,3,4,5}, {1,2,3,4,5}, {1,2,3,4,5}

                    </li>
                    <li>
                        <input type="radio" name="q4" value="b"> int c[5] = 1, 2, 3, 4, 5

                    </li>
                    <li>
                        <input type="radio" name="q4" value="c"> int c[5] = {1}, {2}, {3}, {4}, {5}

                    </li>
                    <li>
                        <input type="radio" name="q4" value="d"> int c[5] = {1,2,3,4,5}

                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 5 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 5. It is a collection of data items, all of the same type, 
                    accessed using a common name.</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q5" value="a"> Strings
                    </li>
                    <li>
                        <input type="radio" name="q5" value="b"> Variables
                    </li>
                    <li>
                        <input type="radio" name="q5" value="c"> Arrays	
                    </li>
                    <li>
                        <input type="radio" name="q5" value="d"> Tri-dimensional Arrays

                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 6 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 6. What is the expected output of the program</h3> 
                <pre>
            #include &lt;stdio.h&gt;
                float average(float a[ ]);
                int main()
                {
                    float avg, c[ ] = {23.4, 55, 22.6, 3, 40.5, 18};
                    avg = average(c); 
                    printf(“Average age=%.2f”, avg);
                    return 0;
                }
                float average(float a[])
                {
                    int i;
                    float avg, sum=0.0;
                    for(i=0; i&lt;6;++i)
                    {
                    sum += a[i];
                    }
                    avg = (sum/6);
                    return avg;
                }

                </pre>
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q6" value="a"> Average age=28.08

                    </li>
                    <li>
                        <input type="radio" name="q6" value="b"> Average age=25.14

                    </li>
                    <li>
                        <input type="radio" name="q6" value="c"> Average age=27.08	
                    </li>
                    <li>
                        <input type="radio" name="q6" value="d"> Average age=30.4
                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 7 -->
         <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 7. What index number of arrays start first?</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q7" value="a"> 1
                    </li>
                    <li>
                        <input type="radio" name="q7" value="b"> -1	
                    </li>
                    <li>
                        <input type="radio" name="q7" value="c"> 0
                    </li>
                    <li>
                        <input type="radio" name="q7" value="d"> -0
                    </li>
                </ul> 
            </div> 
        </div>


         <!-- question 8 -->
         <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 8. If the size of an array is n , what is used to access the last index of an array?</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q8" value="a"> n-last
                    </li>
                    <li>
                        <input type="radio" name="q8" value="b"> n-0
                    </li>
                    <li>
                        <input type="radio" name="q8" value="c"> n-1
                    </li>
                    <li>
                        <input type="radio" name="q8" value="d"> n+1
                    </li>
                </ul> 
            </div> 
        </div>

        <!-- question 9 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 9. How to change the value of 4th element to 1 in the array below?<br>
int num[5] = { 3, 5, 8, 9, 4}
</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q9" value="a"> num[5] = {9}{1};

                    </li>
                    <li>
                        <input type="radio" name="q9" value="b"> num[4] = 1;

                    </li>
                    <li>
                        <input type="radio" name="q9" value="c"> num[4][1];

                    </li>
                    <li>
                        <input type="radio" name="q9" value="d"> num[3]= 1;
                    </li>
                </ul> 
            </div> 
        </div>


        <!-- question 10 -->
        <div class="quizlib-question my-class">  
            <div class="quizlib-question-title">
                <h3> 10. How to declare an array?</h3> 
            </div>  
            <div class="quizlib-question-answers"> 
                <ul>
                    <li>
                        <input type="radio" name="q10" value="a"> variable arrayName [arraySize];
                    </li>
                    <li>
                        <input type="radio" name="q10" value="b"> datatype arrayName [stringSize];

                    </li>
                    <li>
                        <input type="radio" name="q10" value="c"> datatype variableName [arraySize];	
                    </li>
                    <li>
                        <input type="radio" name="q10" value="d"> datatype arrayName [arraySize];

                    </li>
                </ul> 
            </div> 
        </div>
    
        <!-- Submit Button -->
        <div class="d-grid gap-2">
            <button class="btn btn-success" id="submit-answer" type="button">Submit Answers <i class="fas fa-pencil-alt"></i></button>
        </div>
    
   </div>
</main>
