<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<x-app-layout>
    <x-slot name="title">
        Add Topic
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Topic') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form :action=" route('admin.store')" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="title" value="{{ old('title') }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('title') text-red-600 @enderror">
                                Topic Title
                            </label>
                            <input autofocus="true" type="text" id="title" name="title" value="{{ old('title') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('title') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter Title Here" required="">

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
                            <x-trix-field  id="message" name="docs" rows="4"
                                class="
                                block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('docs') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror "
                                placeholder="Details">{{ old('docs') }}</x-trix-field>

                            @error('docs')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('title') text-red-600 @enderror">
                                Question
                            </label>
                            <input autofocus="true" type="text" id="question" name="question" value="{{ old('question') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('question') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter Question Here" required="">

                            @error('question')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('answer') text-red-600 @enderror">
                                Answer
                            </label>
                            <input autofocus="true" type="text" id="answer" name="answer" value="{{ old('title') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('answer') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter solution" required="">

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

                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('subject_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                            name="skill_id" id="" required>

                            <option value="">Select Course</option>

                            @foreach ($courses as $skill)
                            <option value="{{$skill->id}}">{{$skill->name}}</option>
                            @endforeach
                            </select>

                            @error('skill_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
                            Add </button>

                            {{-- <button type="button" class="btn btn-success">ADD</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
