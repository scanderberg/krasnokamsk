<div class="formbox" >
    {if $elem._before_form_template}{include file=$elem._before_form_template}{/if}

            
    <div class="tabs">
        <ul class="tab-container">
                    <li class=" act first"><a data-view="tab0">{$elem->getPropertyIterator()->getGroupName(0)}</a></li>
                    <li class=""><a data-view="tab1">{$elem->getPropertyIterator()->getGroupName(1)}</a></li>
                    <li class=""><a data-view="tab2">{$elem->getPropertyIterator()->getGroupName(2)}</a></li>
                    <li class=""><a data-view="tab3">{$elem->getPropertyIterator()->getGroupName(3)}</a></li>
                </ul>
        <form method="POST" action="{urlmake}" enctype="multipart/form-data" class="crud-form">    
            <input type="submit" value="" style="display:none">
                        <div class="frame" data-name="tab0">
                                                    
                                                                                                                                                                                                                                                                                                                                        <table class="otable">
                                                        
                            <tr>
                                <td class="otitle">{$elem.__name->getTitle()}&nbsp;&nbsp;{if $elem.__name->getHint() != ''}<a class="help-icon" title="{$elem.__name->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__name->getRenderTemplate() field=$elem.__name}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__description->getTitle()}&nbsp;&nbsp;{if $elem.__description->getHint() != ''}<a class="help-icon" title="{$elem.__description->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__description->getRenderTemplate() field=$elem.__description}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__version->getTitle()}&nbsp;&nbsp;{if $elem.__version->getHint() != ''}<a class="help-icon" title="{$elem.__version->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__version->getRenderTemplate() field=$elem.__version}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__core_version->getTitle()}&nbsp;&nbsp;{if $elem.__core_version->getHint() != ''}<a class="help-icon" title="{$elem.__core_version->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__core_version->getRenderTemplate() field=$elem.__core_version}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__author->getTitle()}&nbsp;&nbsp;{if $elem.__author->getHint() != ''}<a class="help-icon" title="{$elem.__author->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__author->getRenderTemplate() field=$elem.__author}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__enabled->getTitle()}&nbsp;&nbsp;{if $elem.__enabled->getHint() != ''}<a class="help-icon" title="{$elem.__enabled->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__enabled->getRenderTemplate() field=$elem.__enabled}</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab1">
                                                    
                                                                                                                                                                                                                                                                                                                                        <table class="otable">
                                                        
                            <tr>
                                <td class="otitle">{$elem.__image_quality->getTitle()}&nbsp;&nbsp;{if $elem.__image_quality->getHint() != ''}<a class="help-icon" title="{$elem.__image_quality->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__image_quality->getRenderTemplate() field=$elem.__image_quality}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__watermark->getTitle()}&nbsp;&nbsp;{if $elem.__watermark->getHint() != ''}<a class="help-icon" title="{$elem.__watermark->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__watermark->getRenderTemplate() field=$elem.__watermark}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__wmark_min_width->getTitle()}&nbsp;&nbsp;{if $elem.__wmark_min_width->getHint() != ''}<a class="help-icon" title="{$elem.__wmark_min_width->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__wmark_min_width->getRenderTemplate() field=$elem.__wmark_min_width}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__wmark_min_height->getTitle()}&nbsp;&nbsp;{if $elem.__wmark_min_height->getHint() != ''}<a class="help-icon" title="{$elem.__wmark_min_height->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__wmark_min_height->getRenderTemplate() field=$elem.__wmark_min_height}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__wmark_pos_x->getTitle()}&nbsp;&nbsp;{if $elem.__wmark_pos_x->getHint() != ''}<a class="help-icon" title="{$elem.__wmark_pos_x->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__wmark_pos_x->getRenderTemplate() field=$elem.__wmark_pos_x}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__wmark_pos_y->getTitle()}&nbsp;&nbsp;{if $elem.__wmark_pos_y->getHint() != ''}<a class="help-icon" title="{$elem.__wmark_pos_y->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__wmark_pos_y->getRenderTemplate() field=$elem.__wmark_pos_y}</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab2">
                                                    
                                                                                                                                                                                                                                                <table class="otable">
                                                        
                            <tr>
                                <td class="otitle">{$elem.__csv_charset->getTitle()}&nbsp;&nbsp;{if $elem.__csv_charset->getHint() != ''}<a class="help-icon" title="{$elem.__csv_charset->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__csv_charset->getRenderTemplate() field=$elem.__csv_charset}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__csv_delimiter->getTitle()}&nbsp;&nbsp;{if $elem.__csv_delimiter->getHint() != ''}<a class="help-icon" title="{$elem.__csv_delimiter->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__csv_delimiter->getRenderTemplate() field=$elem.__csv_delimiter}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__csv_check_timeout->getTitle()}&nbsp;&nbsp;{if $elem.__csv_check_timeout->getHint() != ''}<a class="help-icon" title="{$elem.__csv_check_timeout->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__csv_check_timeout->getRenderTemplate() field=$elem.__csv_check_timeout}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__csv_timeout->getTitle()}&nbsp;&nbsp;{if $elem.__csv_timeout->getHint() != ''}<a class="help-icon" title="{$elem.__csv_timeout->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__csv_timeout->getRenderTemplate() field=$elem.__csv_timeout}</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                        <div class="frame nodisp" data-name="tab3">
                                                    
                                                                                                                                                        <table class="otable">
                                                        
                            <tr>
                                <td class="otitle">{$elem.__geo_ip_service->getTitle()}&nbsp;&nbsp;{if $elem.__geo_ip_service->getHint() != ''}<a class="help-icon" title="{$elem.__geo_ip_service->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__geo_ip_service->getRenderTemplate() field=$elem.__geo_ip_service}</td>
                            </tr>
                            
                                                        
                            <tr>
                                <td class="otitle">{$elem.__dadata_token->getTitle()}&nbsp;&nbsp;{if $elem.__dadata_token->getHint() != ''}<a class="help-icon" title="{$elem.__dadata_token->getHint()|escape}">?</a>{/if}
                                </td>
                                <td>{include file=$elem.__dadata_token->getRenderTemplate() field=$elem.__dadata_token}</td>
                            </tr>
                            
                                                    </table>
                                                </div>
                    </form>
    </div>
    </div>