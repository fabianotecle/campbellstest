<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $phone_number = '+55 (51) 99644-4094';
        $phone_link = 'https://wa.me/5551996444094';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Campbell's Company – Developer Test by Fabiano Alves</title>
    <link rel="stylesheet" href="_css/styles.css" />
    <link rel="stylesheet" href="_css/campbells.css" />
    <link rel="icon" href="_img/favicon.png" sizes="32x32" />
    <script src="_js/campbells.js" defer></script>
</head>
<body>

    <header>
        <div class="header-top">
            <div class="container mx-auto py-2">
                <div class="text-right uppercase">Developer Test by Fabiano Alves</div>
            </div>
        </div>
        <div class="header-logo">
            <div class="container mx-auto flex items-center justify-between">

                <div class="flex items-center space-x-3">
                    <img src="_img/logo.svg" alt="Campbell's" title="Campbell's" class="h-16 w-auto" />
                </div>

                <div class="text-center uppercase">
                    Screening Test/Interview Questions for Web Developer (Remote) Position
                </div>

                <div class="flex items-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg> <a href="<?php echo $phone_link; ?>" target="_blank"><span class="uppercase">Contact</span></a>
                </div>

            </div>
        </div>
        <div class="relative header-hero">
            <img src="_img/hero.jpg" class="w-full object-cover" alt="Fabiano Alves – Web Developer" title="Fabiano Alves – Web Developer" />
            <div class="absolute inset-0 flex items-end  who-i-am-lg">
                <div class="container text-white p-6 pb-9 hidden lg:block">
                <p class="name">Candidate’s Name: Fabiano Alves</p>
                <p class="phone">
                    Phone Number:
                    <a href="<?php echo $phone_link; ?>" target="_blank">
                        <?php echo $phone_number; ?>
                    </a>
                </p>
            </div>
        </div>
    </header>
   
    <main class="mt-7">
        <div class="text-center who-i-am-mobile block lg:hidden">
            <div class="container p-6 pb-9">
                <p class="name">Candidate’s Name: Fabiano Alves</p>
                <p class="phone">
                    Phone Number:
                    <a href="<?php echo $phone_link; ?>" target="_blank">
                        <?php echo $phone_number; ?>
                    </a>
                </p>
            </div>
        </div>

        <div class="container">
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">1. Are you currently employed?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>Yes, I currently work at Futuro Previdência, a company that sells insurance and is becoming a bank
                    here in Brazil. We move more than 300 million reais per month. A large part of this amount is moved
                    with routines that I programmed myself or stabilized from legacy codes.</p>
                </div>
            </div>

            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">2. What are the responsibilities of a web developer?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>Delivering clean, quality code on time. I love it!</p>
                </div>
            </div>

            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">3. What sparked your interest in web development?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>Ever since I was a child, I have had a great talent for mathematics and technology!
                    I was little when I saw my cousin operating an MSX, and from that moment on, it became
                    my passion. I learned a lot from him at an early age, and then I followed my own path.</p>
                </div>
            </div>
            
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">4. Have you ever disagreed with a coworker? Tell me about it and how you resolved it.</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>Normally, when I disagree with a colleague about something, armed with absolute respect
                    and the wisdom that indicates that it is more intelligent to listen than to speak, I present
                    my point of view in the clearest and most didactic way possible. Usually as a tip, not as an
                    imposed absolute truth. Regardless of the outcome of the dialogue, the person responsible makes
                    the necessary decision in the case, and this is executed perfectly.</p>
                </div>
            </div>
            
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">5. Tell What is W3C and why is it important?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>The W3C, or World Wide Web Consortium, is an organization that sets standards for the web.
                    It ensures that websites work well across all browsers and devices.</p>
                    <p>I think this is important because by following these standards, we avoid compatibility issues,
                    improve accessibility, and provide a more consistent and professional user experience.</p>
                </div>
            </div>
            
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">6. Explain how you optimize and reduce web application load time.</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>I usually apply several best practices to optimize loading. First, I minify CSS and JavaScript
                    files, and use images in optimized formats, such as WebP. I also implement lazy loading to load
                    only what is needed at the moment.</p>
                    <p>Another thing that I consider essential is to use caching strategically and, when possible,
                    CDN to distribute content more quickly. And of course, I monitor performance with tools such
                    as Lighthouse or PageSpeed ​​Insights to identify areas for continuous improvement.</p>
                </div>
            </div>

            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">7. What are the differences of using HTTP/2 as opposed to HTTP 1.1?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>The main difference is that HTTP/2 allows multiple requests to be processed simultaneously
                    over the same connection — this is called multiplexing. In HTTP 1.1, requests are processed
                    one at a time, which can cause slowdowns on pages with many files.</p>
                    <p>In addition, HTTP/2 understands headers and allows server push, which sends resources to the
                    client in advance. Overall, it offers better performance, especially for larger or more complex
                    applications.</p>
                </div>
            </div>
            
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">8. In what programming languages are you proficient?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>PHP, JavaScript, NodeJS, NestJS, NextJS, CSS, HTML, React, etc.</p>
                </div>
            </div>
             
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">9. What steps do you take to balance demanding client requirements?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>Since I started working at Espetoflex, I have learned not to say no. The owner of Espetoflex
                    has always been very demanding with the quality of the front-ends and the usability of the
                    e-commerce websites of Espetoflex, Plaquinhaflex and Trem de Pouso. The effort is always maximum
                    to delight the customer and never think of the impossible before doing everything to make it possible.</p>
                </div>
            </div>
            
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">10. Walk me through your portfolio. Which pieces are you most proud of, and why?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p><a href="https://espetoflex.com.br/">https://espetoflex.com.br/</a>: Personalize the tag for
                    your dog or cat! I've done all the customization, so you can see exactly what you're taking home!</p>
                    <p><a href="https://plaquinhaflex.com.br/">https://plaquinhaflex.com.br/</a>: Personalize the tag for
                    your dog or cat! I've done all the customization, so you can see exactly what you're taking home!</p>
                </div>
            </div>
            
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">11. Tell me about yourself and your last/current job/class?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>Here I made my first 100 thousand reais by launching the Skewers customization. I also managed to
                    use cache to make this site accessible to more than a million people without failing a load test!
                    This site gave rise to plaquinhaflex.</p>
                </div>
            </div>
            
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">12. How do you prioritize your work as a Junior Web Developer?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>Here in Brazil, I am already at the peak of my career. Now I need to fulfill my dream of entering
                    an international career. I want to show my community that this is possible, that a poor guy like me
                    can do great things. I think this would be the only thing I still need to do efficiently. I say
                    efficiently because I was working remotely for England before the pandemic, but at the time,
                    since this was new, I ended up preferring to work at Espetoflex.</p>
                </div>
            </div>

            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">13. How much will you request per hour if you are hired?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>About $27</p>
                </div>
            </div>
            
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">14. How well do you handle constructive criticism about your web development projects? Can you give me an example?</span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>Here in Brazil, we have a biannual evaluation by HR and our superiors about the progress of our work, in
                    addition to interpersonal evaluations. We also have many individual meetings. This is normal for me. When
                    they talk, it's better, so we can always change and improve. It's bad when we don't even know where we're
                    going wrong, because then there's nothing we can do!</p>
                </div>
            </div>
            
            <div class="question-box mx-auto border rounded-md shadow-md">
                <button class="w-full flex justify-between items-center focus:outline-none" aria-expanded="false" onclick="toggleAnswer(this)">
                    <span class="question text-left">
                        <p>DUTIES: assisting with the creation of websites and updating existing web applications using
                        scripting languages. They work under the supervision of senior developers, assisting with
                        coding, testing, design adjustments, and client reviews.</p>
                        <p>Can you handle all of these duties effectively?</p>
                    </span>
                    <svg class="arrow w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="answer overflow-hidden max-h-0 transition-[max-height] duration-500 text-gray-700">
                    <p>Perfectly. And starting as a junior! More learning and absorption, serving! I'm ready to start!</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center p-2 text-white mt-7">
        <p>&copy; 2025 The Campbell's Company</p>
        <small>Developer Test by Fabiano Alves</small>
    </footer>

</body>
</html>
