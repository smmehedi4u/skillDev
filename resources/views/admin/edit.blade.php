<x-app-layout>
    <x-slot name="title">
        Edit Topic
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Topic') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form :action="route('admin.store')" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('title') text-red-600 @enderror">
                                Topic Title
                            </label>
                            <input autofocus="true" type="text" id="title" name="title"
                                value="{{ $topic->title }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('title') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Title" required="">

                            @error('title')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 @error('docs') text-red-600 @enderror">
                                Topic Details
                            </label>
                            <x-trix-field id="message" name="docs" rows="4" value="{!! $topic->docs !!}"
                                class="
                                block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('docs') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror "
                                placeholder="Details">

                            </x-trix-field>

                            @error('docs')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 @error('question') text-red-600 @enderror">
                                Topic Question
                            </label>
                            <input autofocus="true" type="text" id="question" name="question"
                                value="{{ $questions->question ?? '' }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('question') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter question Here" required="">

                            @error('question')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Option 1 Input -->
                        <div class="mb-6">
                            <label for="option1"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('option1') text-red-600 @enderror">
                                Option 1
                            </label>
                            <input type="text" id="option1" name="option1" value="{{ $questions->option1 ?? '' }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('option1') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror"
                                placeholder="Enter Option 1" required="">

                            @error('option1')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Option 2 Input -->
                        <div class="mb-6">
                            <label for="option2"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('option2') text-red-600 @enderror">
                                Option 2
                            </label>
                            <input type="text" id="option2" name="option2" value="{{ $questions->option2 ?? '' }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('option2') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror"
                                placeholder="Enter Option 2" required="">

                            @error('option2')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 @error('answer') text-red-600 @enderror">
                                Answer
                            </label>
                            <input autofocus="true" type="text" id="answer" name="answer"
                                value="{{ $questions->answer ?? '' }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('answer') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Answer Here" required="">

                            @error('answer')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 @error('question') text-red-600 @enderror">
                                Courses
                            </label>

                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('subject_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                name="skill_id" id="" required>

                                @foreach ($skills as $skill)
                                    <option @if ($topic->skill_id == $skill->id) selected @endif
                                        value="{{ $skill->id }}">
                                        {{ $skill->name }}
                                    </option>
                            </select>
                            @endforeach
                            @error('skill_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
                            Add </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
