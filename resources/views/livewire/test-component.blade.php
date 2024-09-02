<div>
    <form wire:submit.prevent="upLogin">
        @error('login') <span style="color: red;">{{ $message }}</span> @enderror
        <input class="inputDefault" type="text" name="login" placeholder="Email ou usuário" id="login" wire:model="login">
        
        @error('password') <span style="color: red;">{{ $message }}</span> @enderror
        <input class="inputDefault" type="password" name="password" placeholder="Senha" id="password" wire:model="password">

        <button type="submit" class="btnConfirmDef">
            Entrar
        </button>
    </form>
</div>
