@extends('layouts/main_layout')

@section('container')
<section class="bg-zinc-800 dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <div class="lg:flex lg:-mx-6">
            <div class="lg:w-3/4 lg:px-6">
                <img class="object-cover object-center w-full h-80 xl:h-[32rem] rounded-xl " src="/assets/news/news-1-image.png" alt="">

                <div>
                    <p class="mt-6 text-sm text-yellow-200 uppercase">Law Category</p>

                    <h1 class="max-w-lg mt-4 text-2xl font-semibold leading-tight text-white dark:text-white">
                        How to Report a Crime Scene
                    </h1>

                    <div class="flex items-center my-6">
                        <img class="object-cover object-center w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">

                        <div class="mx-4">
                            <h1 class="text-sm text-white dark:text-gray-200">Dr. Gavriel, S.Pd</h1>
                            <p class="text-sm text-white dark:text-gray-400">Deloitte Attorney</p>
                        </div>
                    </div>

                    <p class="mb-3 text-white dark:text-gray-400">Reporting a crime scene properly is crucial to ensure that justice is served and evidence is preserved. The first step is to ensure personal safety and the safety of others at the scene. Assess the situation from a distance if possible, noting any potential dangers like weapons or hazardous materials. If the crime is still in progress or if there is an immediate threat, call 911 or the relevant emergency number without delay, providing clear, concise information about the location, nature of the crime, and any immediate risks. Staying on the line until the dispatcher says it's okay to hang up can ensure that all necessary details are conveyed.</p>
                    <p class="mb-3 text-white dark:text-gray-400">Once the immediate threat is managed, it’s vital to secure the scene to preserve evidence. This means keeping the area as undisturbed as possible. Avoid touching or moving anything unless it's absolutely necessary to save a life or prevent further harm. Mark off the area using tape, barriers, or even objects at hand if official materials are not available. Instruct any bystanders to stay clear and avoid contaminating potential evidence. If you can, document the scene with photographs or notes about the positions of objects and any visible evidence, but only if it’s safe and does not interfere with the investigation.</p>
                    <p class="mb-3 text-white dark:text-gray-400">After securing the scene, provide a detailed report to law enforcement officials when they arrive. This report should include all observations made upon arrival, including the time, conditions, and any individuals present. Be as specific as possible about what you saw, heard, and smelled, as these details can be crucial for investigators. Mention any actions taken to secure the scene and any interactions with witnesses or suspects. Clear, factual reporting can significantly aid the investigation process, ensuring that critical evidence is not overlooked and that the sequence of events is accurately reconstructed.</p>
                    <p class="mb-3 text-white dark:text-gray-400">Finally, it is essential to cooperate fully with law enforcement and forensic teams. Answer all questions truthfully and provide any additional information or insights that could be relevant. If there are witnesses, encourage them to stay and speak with officers, offering their accounts and any evidence they might have. Following up on any new information you might recall later is also helpful, as even small details can be pivotal. Properly reporting a crime scene is a collective effort that relies on the careful, thoughtful actions of those first on the scene, setting the stage for a thorough and effective investigation.</p>
                </div>
            </div>

            <div class="mt-8 lg:w-1/4 lg:mt-0 lg:px-6">
                <h2 class="mb-6 text-4xl text-white font-bold dark:text-white">More News</h2>
                
                <div>
                    <h3 class="text-yellow-200 capitalize">Crypto</h3>

                    <a href="#" class="block mt-2 font-medium text-white  hover:underline hover:text-yellow-200 dark:text-gray-400 ">
                        Reddit's Crypto Stash, Bitcoin Tops $35000
                    </a>
                </div>

                <hr class="my-6 border-gray-200 dark:border-gray-700">

                <div>
                    <h3 class="text-yellow-200 capitalize">Property</h3>

                    <a href="#" class="block mt-2 font-medium text-white hover:underline hover:text-yellow-200 dark:text-gray-400 ">
                        Over 90% houses in Jakarta was taxed over 55%
                    </a>
                </div>

                <hr class="my-6 border-gray-200 dark:border-gray-700">

                <div>
                    <h3 class="text-yellow-200 capitalize">Labor</h3>

                    <a href="#" class="block mt-2 font-medium text-white  hover:underline hover:text-yellow-200 dark:text-gray-400 ">
                        Kemenaker says that TKI will have 6% increase of wage
                    </a>
                </div>

                <hr class="my-6 border-gray-200 dark:border-white ">

                <div>
                    <h3 class="text-yellow-200 capitalize">Marriage</h3>

                    <a href="#" class="block mt-2 font-medium text-white  hover:underline hover:text-yellow-200 dark:text-gray-400 ">
                        KUA has officialy announce to legalize 5 religions
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection