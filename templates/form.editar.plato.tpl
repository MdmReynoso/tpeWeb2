B}">######################################################## Bzx744444444444444444444444444444444444444444444444444444444444888210
            </div>
            <div class="fila_formulario">
                <label for="descripcion"> Descripción: </label>
            </div>
            <div class="fila_formulario">
                <textarea name="descripcion" cols="30" rows="10">{$plato->descripcion}</textarea>
            </div>
            <div class="fila_formulario">
                <input type="submit" name="editar" value="Editar">
            </div>
            {if $error}
                <div class="error">
                    *{$error}
                </div>
            {/if}
        </form>
    </div>
</div>
{include file="footer.tpl"}