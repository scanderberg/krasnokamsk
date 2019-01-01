<div class="formbox" >
            
    <div class="tabs">
        <ul class="tab-container">
                    <li class=" act first"><a data-view="tab0">{$elem->getPropertyIterator()->getGroupName(0)}</a></li>
                    <li class=""><a data-view="tab1">{$elem->getPropertyIterator()->getGroupName(1)}</a></li>
                    <li class=""><a data-view="tab2">{$elem->getPropertyIterator()->getGroupName(2)}</a></li>
                </ul>
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">    
            <input type="submit" value="" style="display:none"/>
                        <div class="frame" data-name="tab0">
                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <table class="otable">
                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__ADMIN_SECTION->getTitle()}&nbsp;&nbsp;{if $elem.__ADMIN_SECTION->getHint() != ''}<a class="help-icon" title="{$elem.__ADMIN_SECTION->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__ADMIN_SECTION->getRenderTemplate() field=$elem.__ADMIN_SECTION}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__SM_COMPILE_CHECK->getTitle()}&nbsp;&nbsp;{if $elem.__SM_COMPILE_CHECK->getHint() != ''}<a class="help-icon" title="{$elem.__SM_COMPILE_CHECK->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__SM_COMPILE_CHECK->getRenderTemplate() field=$elem.__SM_COMPILE_CHECK}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__DETAILED_EXCEPTION->getTitle()}&nbsp;&nbsp;{if $elem.__DETAILED_EXCEPTION->getHint() != ''}<a class="help-icon" title="{$elem.__DETAILED_EXCEPTION->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__DETAILED_EXCEPTION->getRenderTemplate() field=$elem.__DETAILED_EXCEPTION}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__CACHE_ENABLED->getTitle()}&nbsp;&nbsp;{if $elem.__CACHE_ENABLED->getHint() != ''}<a class="help-icon" title="{$elem.__CACHE_ENABLED->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__CACHE_ENABLED->getRenderTemplate() field=$elem.__CACHE_ENABLED}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__CACHE_BLOCK_ENABLED->getTitle()}&nbsp;&nbsp;{if $elem.__CACHE_BLOCK_ENABLED->getHint() != ''}<a class="help-icon" title="{$elem.__CACHE_BLOCK_ENABLED->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__CACHE_BLOCK_ENABLED->getRenderTemplate() field=$elem.__CACHE_BLOCK_ENABLED}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__CACHE_TIME->getTitle()}&nbsp;&nbsp;{if $elem.__CACHE_TIME->getHint() != ''}<a class="help-icon" title="{$elem.__CACHE_TIME->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__CACHE_TIME->getRenderTemplate() field=$elem.__CACHE_TIME}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__COMPRESS_CSS->getTitle()}&nbsp;&nbsp;{if $elem.__COMPRESS_CSS->getHint() != ''}<a class="help-icon" title="{$elem.__COMPRESS_CSS->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__COMPRESS_CSS->getRenderTemplate() field=$elem.__COMPRESS_CSS}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__COMPRESS_JS->getTitle()}&nbsp;&nbsp;{if $elem.__COMPRESS_JS->getHint() != ''}<a class="help-icon" title="{$elem.__COMPRESS_JS->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__COMPRESS_JS->getRenderTemplate() field=$elem.__COMPRESS_JS}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__JS_POSITION_FOOTER->getTitle()}&nbsp;&nbsp;{if $elem.__JS_POSITION_FOOTER->getHint() != ''}<a class="help-icon" title="{$elem.__JS_POSITION_FOOTER->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__JS_POSITION_FOOTER->getRenderTemplate() field=$elem.__JS_POSITION_FOOTER}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__show_debug_header->getTitle()}&nbsp;&nbsp;{if $elem.__show_debug_header->getHint() != ''}<a class="help-icon" title="{$elem.__show_debug_header->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__show_debug_header->getRenderTemplate() field=$elem.__show_debug_header}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__CRON_ENABLE->getTitle()}&nbsp;&nbsp;{if $elem.__CRON_ENABLE->getHint() != ''}<a class="help-icon" title="{$elem.__CRON_ENABLE->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__CRON_ENABLE->getRenderTemplate() field=$elem.__CRON_ENABLE}</td>
                                </tr>
                                
                                                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab1">
                                                    
                                                                        {include file=$elem.____cache__->getRenderTemplate() field=$elem.____cache__}
                                                                                                                                                </div>
                        <div class="frame nodisp" data-name="tab2">
                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <table class="otable">
                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__notice_from->getTitle()}&nbsp;&nbsp;{if $elem.__notice_from->getHint() != ''}<a class="help-icon" title="{$elem.__notice_from->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__notice_from->getRenderTemplate() field=$elem.__notice_from}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__notice_reply->getTitle()}&nbsp;&nbsp;{if $elem.__notice_reply->getHint() != ''}<a class="help-icon" title="{$elem.__notice_reply->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__notice_reply->getRenderTemplate() field=$elem.__notice_reply}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__smtp_is_use->getTitle()}&nbsp;&nbsp;{if $elem.__smtp_is_use->getHint() != ''}<a class="help-icon" title="{$elem.__smtp_is_use->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__smtp_is_use->getRenderTemplate() field=$elem.__smtp_is_use}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__smtp_host->getTitle()}&nbsp;&nbsp;{if $elem.__smtp_host->getHint() != ''}<a class="help-icon" title="{$elem.__smtp_host->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__smtp_host->getRenderTemplate() field=$elem.__smtp_host}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__smtp_port->getTitle()}&nbsp;&nbsp;{if $elem.__smtp_port->getHint() != ''}<a class="help-icon" title="{$elem.__smtp_port->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__smtp_port->getRenderTemplate() field=$elem.__smtp_port}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__smtp_secure->getTitle()}&nbsp;&nbsp;{if $elem.__smtp_secure->getHint() != ''}<a class="help-icon" title="{$elem.__smtp_secure->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__smtp_secure->getRenderTemplate() field=$elem.__smtp_secure}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__smtp_auth->getTitle()}&nbsp;&nbsp;{if $elem.__smtp_auth->getHint() != ''}<a class="help-icon" title="{$elem.__smtp_auth->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__smtp_auth->getRenderTemplate() field=$elem.__smtp_auth}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__smtp_username->getTitle()}&nbsp;&nbsp;{if $elem.__smtp_username->getHint() != ''}<a class="help-icon" title="{$elem.__smtp_username->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__smtp_username->getRenderTemplate() field=$elem.__smtp_username}</td>
                                </tr>
                                
                                                                                                                            
                                <tr>
                                    <td class="otitle">{$elem.__smtp_password->getTitle()}&nbsp;&nbsp;{if $elem.__smtp_password->getHint() != ''}<a class="help-icon" title="{$elem.__smtp_password->getHint()|escape}">?</a>{/if}
                                    </td>
                                    <td>{include file=$elem.__smtp_password->getRenderTemplate() field=$elem.__smtp_password}</td>
                                </tr>
                                
                                                                                    </table>
                                                </div>
                    </form>
    </div>
    </div>