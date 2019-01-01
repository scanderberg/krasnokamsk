<div class="formbox" >
    {if $elem._before_form_template}{include file=$elem._before_form_template}{/if}

                
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">
            <input type="submit" value="" style="display:none">
            <div class="notabs">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                                    <table class="otable">
                                                                                    
                                <tr>
                                    <td class="otitle">{$elem.__name->getTitle()}&nbsp;&nbsp;{if $elem.__name->getHint() != ''}<a class="help-icon" title="{$elem.__name->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__name->getRenderTemplate() field=$elem.__name}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__description->getTitle()}&nbsp;&nbsp;{if $elem.__description->getHint() != ''}<a class="help-icon" title="{$elem.__description->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__description->getRenderTemplate() field=$elem.__description}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__version->getTitle()}&nbsp;&nbsp;{if $elem.__version->getHint() != ''}<a class="help-icon" title="{$elem.__version->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__version->getRenderTemplate() field=$elem.__version}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__core_version->getTitle()}&nbsp;&nbsp;{if $elem.__core_version->getHint() != ''}<a class="help-icon" title="{$elem.__core_version->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__core_version->getRenderTemplate() field=$elem.__core_version}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__author->getTitle()}&nbsp;&nbsp;{if $elem.__author->getHint() != ''}<a class="help-icon" title="{$elem.__author->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__author->getRenderTemplate() field=$elem.__author}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__enabled->getTitle()}&nbsp;&nbsp;{if $elem.__enabled->getHint() != ''}<a class="help-icon" title="{$elem.__enabled->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__enabled->getRenderTemplate() field=$elem.__enabled}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__priority->getTitle()}&nbsp;&nbsp;{if $elem.__priority->getHint() != ''}<a class="help-icon" title="{$elem.__priority->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__priority->getRenderTemplate() field=$elem.__priority}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__changefreq->getTitle()}&nbsp;&nbsp;{if $elem.__changefreq->getHint() != ''}<a class="help-icon" title="{$elem.__changefreq->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__changefreq->getRenderTemplate() field=$elem.__changefreq}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__set_generate_time_as_lastmod->getTitle()}&nbsp;&nbsp;{if $elem.__set_generate_time_as_lastmod->getHint() != ''}<a class="help-icon" title="{$elem.__set_generate_time_as_lastmod->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__set_generate_time_as_lastmod->getRenderTemplate() field=$elem.__set_generate_time_as_lastmod}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__lifetime->getTitle()}&nbsp;&nbsp;{if $elem.__lifetime->getHint() != ''}<a class="help-icon" title="{$elem.__lifetime->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__lifetime->getRenderTemplate() field=$elem.__lifetime}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__add_urls->getTitle()}&nbsp;&nbsp;{if $elem.__add_urls->getHint() != ''}<a class="help-icon" title="{$elem.__add_urls->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__add_urls->getRenderTemplate() field=$elem.__add_urls}</td>
                                </tr>
                                                            
                                <tr>
                                    <td class="otitle">{$elem.__exclude_urls->getTitle()}&nbsp;&nbsp;{if $elem.__exclude_urls->getHint() != ''}<a class="help-icon" title="{$elem.__exclude_urls->getHint()|escape}">?</a>{/if}</td>
                                    <td>{include file=$elem.__exclude_urls->getRenderTemplate() field=$elem.__exclude_urls}</td>
                                </tr>
                                                                        </table>
                            </div>
        </form>
    </div>