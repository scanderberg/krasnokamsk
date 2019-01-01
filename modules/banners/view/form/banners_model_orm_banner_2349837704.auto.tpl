<div class="formbox" >
                
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
                                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                    
                                    <table class="otable">
                                                                                                                    
                                <tr>
                                    <td class="otitle">{$elem.__title->getTitle()}&nbsp;&nbsp;{if $elem.__title->getHint() != ''}<a class="help-icon" title="{$elem.__title->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__title->getRenderTemplate() field=$elem.__title}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__file->getTitle()}&nbsp;&nbsp;{if $elem.__file->getHint() != ''}<a class="help-icon" title="{$elem.__file->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__file->getRenderTemplate() field=$elem.__file}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__use_original_file->getTitle()}&nbsp;&nbsp;{if $elem.__use_original_file->getHint() != ''}<a class="help-icon" title="{$elem.__use_original_file->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__use_original_file->getRenderTemplate() field=$elem.__use_original_file}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__link->getTitle()}&nbsp;&nbsp;{if $elem.__link->getHint() != ''}<a class="help-icon" title="{$elem.__link->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__link->getRenderTemplate() field=$elem.__link}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__targetblank->getTitle()}&nbsp;&nbsp;{if $elem.__targetblank->getHint() != ''}<a class="help-icon" title="{$elem.__targetblank->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__targetblank->getRenderTemplate() field=$elem.__targetblank}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__info->getTitle()}&nbsp;&nbsp;{if $elem.__info->getHint() != ''}<a class="help-icon" title="{$elem.__info->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__info->getRenderTemplate() field=$elem.__info}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__public->getTitle()}&nbsp;&nbsp;{if $elem.__public->getHint() != ''}<a class="help-icon" title="{$elem.__public->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__public->getRenderTemplate() field=$elem.__public}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__xzone->getTitle()}&nbsp;&nbsp;{if $elem.__xzone->getHint() != ''}<a class="help-icon" title="{$elem.__xzone->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__xzone->getRenderTemplate() field=$elem.__xzone}</td>
                                </tr>
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__weight->getTitle()}&nbsp;&nbsp;{if $elem.__weight->getHint() != ''}<a class="help-icon" title="{$elem.__weight->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__weight->getRenderTemplate() field=$elem.__weight}</td>
                                </tr>
                                                                                                        </table>
                            </div>
        </form>
    </div>