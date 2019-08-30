function scrap_content(link,response) {

                    var parser = new DOMParser();
                    var domDoc = parser.parseFromString(response.data, 'text/html');
                    var Profile_Names = [];
                    var Comments = [];
                    var CommentLink = [];
                    if (link.match('custhelp')) {
                        var answer = [];
                        answer.link = link;
                        answer.value = domDoc.getElementById('rn_AnswerText').innerText;
                        show_answer(answer);
                    } else {
                        if (link.match('geforce')) {
                            Profile_Names = domDoc.getElementsByClassName('profileName');
                            Comments = domDoc.getElementsByClassName('forumText');
                            var Links = domDoc.getElementsByClassName('forumNumber png');
                            var i = 0;
                            _.forEach(Links, function () {
                                var link = Links[i].childNodes['1'].href;
                                link = link.replace('file:///C:', 'https://forums.geforce.com');
                                CommentLink.push(link);
                                i++;
                            });
                        } else if (link.match('reddit')) {
                            var comment_box = domDoc.getElementsByClassName('entry unvoted');
                            _.forEach(comment_box, function (single_comment) {
                                var data = single_comment.getElementsByClassName('tagline');
                                Profile_Names.push(data['0'].children[1]);
                                data = single_comment.
                                getElementsByClassName('usertext-body may-blank-within md-container');
                                Comments.push(data['0']);
                                CommentLink.push(link);
                            });
                        } else {
                            var comment_box = domDoc.getElementsByClassName('answercell');
                            _.forEach(comment_box, function (single_comment) {
                                var data = single_comment.getElementsByClassName('user-details');
                                _.forEach(data, function (name) {
                                    var a = name.children[0].innerText;
                                    if (name.firstElementChild.className != '-flair') {
                                        Profile_Names.push(name.children[0]);
                                    }
                                });
                                data = single_comment.getElementsByClassName('post-text');
                                Comments.push(data['0']);
                                CommentLink.push(link);
                            });
                        }

                        var comment_number = 0;
                        var List = []
                        _.forEach(Comments, function () {
                            var CommentList = [];
                            CommentList.link = CommentLink[comment_number];
                            CommentList.title = Profile_Names[comment_number].innerText;
                            CommentList.comment = Comments[comment_number].innerText;
                            List.push(CommentList);
                            comment_number++;
                        });

                        if (Profile_Names.length > 0) {
                            return List;
                        }else{
                            return "No Data";
                        }
                    }
            
        };