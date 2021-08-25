<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6 lg:py-20">

        <form wire:submit.prevent="submitForm">
            <div class="space-y-6">

                <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-10">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Use lowercase characters when filling out this form
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="POST">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <x-form.label for="firstname">First name</x-form.label>
                                        <x-form.input wire:model.lazy="formData.firstname" type="text" id="firstname"></x-form.input>
                                        <x-form.form-error for="formData.firstname"></x-form.form-error>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-form.label for="lastname">Last name</x-form.label>
                                        <x-form.input wire:model.lazy="formData.lastname" type="text" id="lastname"></x-form.input>
                                        <x-form.form-error for="formData.lastname"></x-form.form-error>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <x-form.label for="email">Email address</x-form.label>
                                        <x-form.input wire:model.lazy="formData.email" type="text" id="email"></x-form.input>
                                        <x-form.form-error for="formData.email"></x-form.form-error>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-form.label for="ognumber">OG Number</x-form.label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                              OG
                                            </span>
                                            <input wire:model.lazy="formData.og_number" type="text"
                                                   id="ognumber"
                                                   class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                   placeholder="012345">
                                        </div>
                                        <x-form.form-error for="formData.og_number"></x-form.form-error>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <x-form.label for="whatsappnumber">Whatsapp Number</x-form.label>
                                        <x-form.input wire:model.lazy="formData.whatsapp_number" type="text" placeholder="08023456789" class="tracking-widest"></x-form.input>
                                        <x-form.form-error for="formData.whatsapp_number"></x-form.form-error>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                        <x-form.label for="dob">Date of Birth</x-form.label>
                                        <x-date-picker wire:model.lazy="formData.dob" placeholder="yyyy-mm-dd"></x-date-picker>
                                        <x-form.form-error for="formData.dob"></x-form.form-error>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                        <x-form.label for="gender">Gender</x-form.label>
                                        <select wire:model="formData.gender" id="gender" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                            <option>Select One</option>
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                        </select>
                                        <x-form.form-error for="formData.gender"></x-form.form-error>
                                    </div>
                                    <div class="col-span-6">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Photo
                                            </label>
                                            <div class="mt-1 flex items-center space-x-5">
                                                <span class="inline-block h-16 w-16 rounded-full overflow-hidden bg-gray-100">
                                                    @if($photo)
                                                        <img src="{{ $photo->temporaryUrl() }}" alt="Photo preview">
                                                    @else
                                                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                          <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                        </svg>
                                                    @endif
                                                </span>
                                                <label for="photo-upload" class="cursor-pointer bg-white py-3 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input wire:model="photo" id="photo-upload" type="file" class="sr-only">
                                                </label>
                                            </div>
                                            <x-form.form-error for="photo"></x-form.form-error>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-10">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Work Related</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                This information will be displayed publicly so be careful what you share.
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form class="space-y-6" action="#" method="POST">
                                <div class="grid grid-cols-4 gap-6">
                                    <div class="col-span-4 sm:col-span-2">
                                        <x-form.label>Grade level</x-form.label>
                                        <x-form.select wire:model="formData.grade_level" :values="\App\Domain\Support\Helpers::gradeLevel()"></x-form.select>
                                        <x-form.form-error for="formData.grade_level"></x-form.form-error>
                                    </div>

                                    <div class="col-span-4 sm:col-span-2">
                                        <x-form.label>Grade step</x-form.label>
                                        <x-form.select wire:model="formData.grade_step" :values="\App\Domain\Support\Helpers::gradeStep()"></x-form.select>
                                        <x-form.form-error for="formData.grade_step"></x-form.form-error>
                                    </div>

                                    <div class="col-span-4 sm:col-span-3">
                                        <x-form.label for="department">Department</x-form.label>
                                        <x-form.select wire:model="formData.department" :values="\App\Domain\Support\Helpers::departments()"></x-form.select>
                                        <x-form.form-error for="formData.department"></x-form.form-error>
                                    </div>

                                    <div class="col-span-4 sm:col-span-2">
                                        <x-form.label for="cadre">Cadre</x-form.label>
                                        <x-form.select wire:model="formData.cadre" :values="\App\Domain\Support\Helpers::cadres()" id="cadre"></x-form.select>
                                        <x-form.form-error for="formData.cadre"></x-form.form-error>
                                    </div>

                                    <div class="col-span-4 sm:col-span-2">
                                        <x-form.label>Competence Level</x-form.label>
                                        <x-form.select wire:model="formData.competence_level" :values="\App\Domain\Support\Helpers::competence()"></x-form.select>
                                        <x-form.form-error for="formData.competence_level"></x-form.form-error>
                                    </div>

                                    <div class="col-span-4">
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">Area of Interests</legend>
                                            <div class="mt-4 space-y-4">
                                                <div class="flex flex-wrap items-center">
                                                    @foreach( \App\Domain\Support\Helpers::areaOfInterests() as $key => $value )
                                                        <div class="w-full sm:w-1/2 py-3 flex items-start">
                                                            <div class="h-5 flex items-center">
                                                                <x-form.input wire:model="formData.area_of_interests" value="{{ $key }}" type="checkbox" id="{{$key}}"></x-form.input>
    {{--                                                            <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">--}}
                                                            </div>
                                                            <div class="ml-3 text-xs md:text-sm">
                                                                <label for="{{$key}}" class="font-medium text-gray-700">{{ ucwords($key) }}</label>
                                                                @if( !empty($value[0]) )<p class="text-gray-500">{{ $value[0] }}</p>@endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <x-form.form-error for="formData.area_of_interests"></x-form.form-error>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-span-4 sm:col-span-2">
                                        <x-form.label>Unit</x-form.label>
                                        <x-form.select wire:model="formData.unit" :values="['capacity development', 'planning & feeback', 'regulations', 'standards']"></x-form.select>
                                        <x-form.form-error for="formData.unit"></x-form.form-error>
                                    </div>

                                    <div class="col-span-4 sm:col-span-2">
                                        <x-form.label>Rank</x-form.label>
                                        <x-form.select wire:model="formData.rank" :values="['officer', 'unit head', 'director']"></x-form.select>
                                        <x-form.form-error for="formData.rank"></x-form.form-error>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                    </button>
                    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </form>

    </div>

</div>
