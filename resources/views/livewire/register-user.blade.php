<div>
    @if (session()->has('message'))
        <div style="color: green;">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="register">

        <div class="area-select-country">
            <select class="form-select" name="#" id="#">
                <option value="Brasil" selected="">Brasil</option>
            </select>

            <span>Certifique-se de que este é seu país de residência permanente.</span>
        </div>

        @error('email') <span style="color: red;">{{ $message }}</span> @enderror
        <input class="inputDefault" type="email" name="email" placeholder="E-mail" id="email" wire:model="email">
        
        @error('user') <span style="color: red;">{{ $message }}</span> @enderror
        <input class="inputDefault" type="text" name="user" placeholder="Usuário" id="user" wire:model="user">
        
        @error('password') <span style="color: red;">{{ $message }}</span> @enderror
        <input class="inputDefault" type="password" name="password" placeholder="Senha" id="password" wire:model="password">
        

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="checkTermos">
            
            <label class="form-check-label" for="checkTermos">
                Confirmo que tenho 18 anos ou mais e aceito os 
                <a target="_blank" href="#" class="link">Termos e Condições</a>
                , a 
                <a target="_blank" href="#" class="link">Política de Privacidade</a> 
                e a 
                <a target="_blank" href="#" class="link">Política de Execução de Ordens.</a>
            </label>
        </div>

        <button type="submit" class="btnConfirmDef">
            Concluir cadastro
        </button>
    </form>
</div>
