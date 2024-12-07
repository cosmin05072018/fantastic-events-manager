<style>
    .logo-img {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    select {
        background-color: ##111827 !important; /* Fundal întunecat */
        color: #cbd5e0 !important; /* Text deschis la culoare */
        border: 1px solid #4a5568 !important; /* Bordură similară cu celelalte câmpuri */
        padding: 0.5rem !important;
        border-radius: 0.375rem !important; /* Rotunjirea colțurilor */
        height: 40px !important; /* Înălțime similară */
        width: 100% !important; /* Se extinde pe toată lățimea */
        appearance: none !important; /* Îndepărtează stilul implicit pentru browsere */
    }

    /* Săgeata din dreapta pentru select */
    select::-ms-expand {
        display: none !important; /* Ascunde săgeata în Internet Explorer */
    }

    /* Stil pentru placeholder */
    select option[value=""][disabled] {
        color: #a0aec0 !important; /* Culoare mai pală pentru placeholder */
    }

    /* Hover și focus pentru select */
    select:hover, select:focus {
        border-color: #718096 !important; /* Culoare pentru border la hover și focus */
        outline: none !important;
    }
</style>

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Județ -->
    <div class="mt-4">
        <x-input-label for="county" :value="__('Selectează Județul')" />
        <select id="county" name="county" class="block mt-1 w-full select2" required>
            <option value=""></option>
            <option value="Alba">Alba</option>
            <option value="Arad">Arad</option>
            <option value="Argeș">Argeș</option>
            <option value="Bacău">Bacău</option>
            <option value="Bihor">Bihor</option>
            <option value="Bistrița-Năsăud">Bistrița-Năsăud</option>
            <option value="Botoșani">Botoșani</option>
            <option value="Brașov">Brașov</option>
            <option value="Brăila">Brăila</option>
            <option value="București">București</option>
            <option value="Buzău">Buzău</option>
            <option value="Caraș-Severin">Caraș-Severin</option>
            <option value="Călărași">Călărași</option>
            <option value="Cluj">Cluj</option>
            <option value="Constanța">Constanța</option>
            <option value="Covasna">Covasna</option>
            <option value="Dâmbovița">Dâmbovița</option>
            <option value="Dolj">Dolj</option>
            <option value="Galați">Galați</option>
            <option value="Giurgiu">Giurgiu</option>
            <option value="Gorj">Gorj</option>
            <option value="Harghita">Harghita</option>
            <option value="Hunedoara">Hunedoara</option>
            <option value="Ialomița">Ialomița</option>
            <option value="Iași">Iași</option>
            <option value="Ilfov">Ilfov</option>
            <option value="Maramureș">Maramureș</option>
            <option value="Mehedinți">Mehedinți</option>
            <option value="Mureș">Mureș</option>
            <option value="Neamț">Neamț</option>
            <option value="Olt">Olt</option>
            <option value="Prahova">Prahova</option>
            <option value="Satu Mare">Satu Mare</option>
            <option value="Sălaj">Sălaj</option>
            <option value="Sibiu">Sibiu</option>
            <option value="Suceava">Suceava</option>
            <option value="Teleorman">Teleorman</option>
            <option value="Timiș">Timiș</option>
            <option value="Tulcea">Tulcea</option>
            <option value="Vaslui">Vaslui</option>
            <option value="Vâlcea">Vâlcea</option>
            <option value="Vrancea">Vrancea</option>
        </select>
        <x-input-error :messages="$errors->get('county')" class="mt-2" />
    </div>

        <!-- Nume Firmă -->
        <div>
            <x-input-label for="name" class="mt-3" :value="__('Nume Firmă')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- CUI Firmă -->
        <div>
            <x-input-label class="mt-3" for="name" :value="__('CUI Firmă')" />
            <x-text-input id="name" class="block mt-1 w-full" type="number" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
